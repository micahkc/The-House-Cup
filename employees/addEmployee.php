<?php

  session_start();
  if(!isset($_SESSION["title"]) || !($_SESSION["title"] == "manager" || $_SESSION["title"] == "barista")){
    header("location: \login.php");
    exit;
  }

 
// Include config file
require_once "connectToDB.php";
 
// Define variables and initialize with empty values
$email = $password = $fName = $lName = "";
$email_err = $password_err = $fName_err = $lName_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $title = $_POST["title"];
  if(empty(trim($_POST["firstName"]))){
        $fName_err = "Please enter your first name.";
    } else{
        $fName = trim($_POST["firstName"]);
    }

    if(empty(trim($_POST["lastName"]))){
        $lName_err = "Please enter email.";
    } else{
        $lName = trim($_POST["lastName"]);
    }
 
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err) && empty($fName_err) && empty($lName_err)){
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
                
                // Check if username exists, if not then create account
                if(mysqli_stmt_num_rows($stmt) == 0){
                    $pass = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO Person values('$email', '$fName', '$lName', '$title', '$pass')";
                    if ($conn->query($sql) === TRUE) {                       
                      // Redirect user to welcome page
                      header("location: employeeHome.php");
                    } 
                    else {
                      echo "Error on insert: " . $conn->error;
                    }                    
                            
                }
                else{
                    // Display an error message if username does exist
                    $email_err = "An account has already been created with this email.";
                }
            } 
            else{
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
#acctBtn{
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
    <title>Create Employee Account</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
<!--     <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }


    </style> -->
</head>
<body>
    <div id="main" class="col-12">
        <h2>Create Employee Account</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="">
                <label>First Name</label><br>
                <input type="text" name="firstName" class="boxClass" value="<?php echo $fName; ?>"><br>
                <span class="help-block"><?php echo $fName_err; ?></span>
            </div>
            <div class="">
                <label>Last Name</label><br>
                <input type="text" name="lastName" class="boxClass" value="<?php echo $lName; ?>"><br>
                <span class="help-block"><?php echo $lName_err; ?></span>
            </div>
            <div class="">
                <label>Email</label><br>
                <input type="text" name="email" class="boxClass" value="<?php echo $email; ?>"><br>
                <span class="help-block"><?php echo $email_err; ?></span>
            </div> 
             <div class="">
                <label>Password</label><br>
                <input type="password" name="password" class="boxClass"><br>
                <span class="help-block"><?php echo $password_err; ?></span><br>
            </div>
            <div class="">
                <input type="radio" id="barista" name="title" value="barista" checked="true">
                <label for="barista">Barista</label><br>
                <input type="radio" id="manager" name="title" value="manager">
                <label for="manager">Manager</label><br>
            </div>   
             <div class="">
                <input type="submit" class="btn" id="acctBtn" value="Create Account" style="background-color:#ff8000;">
            </div>
           
            

        </form>
        <br><br><br>
    </div>
    <div class="col-12" id="buttonRow">
        <button class="btn" onClick="window.location.href='/home.php';">Home</button>
    </div>
      
</body>
</html>