<?php

session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.html");
    exit;
}
 
// Include config file
require_once "connectToDB.php";
 
// Define variables and initialize with empty values
$email = $newPassword = $oldPassword = "";
$email_err = $newPassword_err = $oldPassword_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["oldPassword"]))){
        $oldPassword_err = "Please enter your previous password.";
    } else{
        $oldPassword = trim($_POST["oldPassword"]);
    }

    if(empty(trim($_POST["newPassword"]))){
        $newPassword_err = "Please enter a new password.";
    } else{
        $newPassword = trim($_POST["newPassword"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT email, firstName, password, title FROM Person WHERE email = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $email, $firstName, $hashed_password, $title);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($oldPassword, $hashed_password)){
                          $pass = password_hash($newPassword, PASSWORD_DEFAULT);
                          $sql = "UPDATE Person SET password = '$pass' WHERE email = '$email'";
                          if ($conn->query($sql) === TRUE) {
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["name"] = $firstName;
                            $_SESSION["title"] = $title;
                            echo $_SESSION["name"];
                            echo $_SESSION["title"];                         
                            
                            // Redirect user to welcome page
                            header("location: home.php");
                          }

                          else{
                            echo "Error on insert: " . $conn->error;
                          } 
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $email_err = "No account found with that email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html><!--need button to return to employees page-->
<html lang="en">
<style>
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}

.btn {

/*  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);*/
  background-color: #f1f1f1;
  background-color: #ff8000;
  border: none;
  font-size: 18px;
  color: white;
  padding: 15px 32px;

  text-align: center;
}
#resetBtn{
    border-radius: 7px;
  color: black;
  padding: 7px 16px;
 
}

.btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  cursor: pointer;
}

#main{
    text-align: center;
    font-family: sans-serif;
    font-size: 18px;
}
.help-block{
    color: red;
    font-size: 12px;
}
.boxClass{
    font-family: sans-serif;
    /*font-size:12pt;*/
    height: 25px;
    border-radius: 5px;
    border-width: thin;
    width: 250px;
}
#buttonRow{
    text-align: center;
}

</style>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
<!--     <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }


    </style> -->
</head>
<body>
    <div id="main" class="col-12">
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="">
                <label>Email</label><br>
                <input type="text" name="email" class="boxClass" value="<?php echo $email; ?>"><br>
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>    
            <div class="">
                <label>Old Password</label><br>
                <input type="password" name="oldPassword" class="boxClass"><br>
                <span class="help-block"><?php echo $oldPassword_err; ?></span><br>
            </div>
            <div class="">
                <label>New Password</label><br>
                <input type="password" name="newPassword" class="boxClass"><br>
                <span class="help-block"><?php echo $newPassword_err; ?></span><br>
                <input type="submit" class="btn" id="resetBtn" value="Reset Password" style="background-color:#ff8000;">
            </div>

        </form>
        <br><br><br>
    </div>
    <div class="col-12" id="buttonRow">
        <button class="btn" onClick="window.location.href='home.php';">Home</button>
    </div>
      
</body>
</html>