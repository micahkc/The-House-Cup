<?php
// Initialize the session
  session_start();
  if(!isset($_SESSION["title"]) || !($_SESSION["title"] == "manager" || $_SESSION["title"] == "barista")){
    header("location: \login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}
html{background-color: #fffff}
body {
  font-family: sans-serif;
}
#main{
  text-align: center;
}
#menu-button{
  align-content: left;
}
img {
  width: 50%;
  height: auto;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: .3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}


.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.btn {
 /* position: absolute;
  top: 50%;
  left: 50%;*/
  /*transform: translate(-50%, -50%);*/
  /*-ms-transform: translate(-50%, -50%);*/

  background-color: #f1f1f1;
  background-color: #ff8000;
  border: none;
  font-size: 18px;
  color: white;
  padding: 15px 32px;
  text-align: center;
}

.btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  cursor: pointer;
}


  .welcomeDropDown{
      display: inline-block;
      float:right;
      width: 200px;
    }
  .welcomeDropDown .welcomeDropDownBtn {
    float: right;
    background-color: white;
    border: none;
    font-size: 18px;
    color: black;
    padding: 15px 32px;
    text-align: center;
    width:200px;

  }
  .welcomeDropDown .welcomeDropDown-content {
    float:right;
    position: absolute;
    display: none;
    z-index: 1;
  }
  .welcomeDropDown .welcomeDropDown-content button{  
    background-color: white;
    border: none;
    font-size: 18px;
    color: black;
    padding: 15px 32px;
    text-align: center;
    float: right;
    width: 200px;
    display: block;
  }
  .welcomeDropDown .welcomeDropDown-content button:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    cursor: pointer;
  }
  .welcomeDropDown:hover .welcomeDropDown-content {
    display: block;
  }
  .welcomeDropDown:focus .welcomeDropDown-content{
    display: block;
  }

h2{
  font-size: 15pt;
}

#inventory{
  text-align: center;

}





/* For mobile phones: */
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

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="\home.php">Home</a>
  <a href="\order.php">Order</a>
  <a href="\about.php">About</a>
  <a href="\merchandise.php">Merch</a>
  <a href="\employees.php">Employees</a>
</div>

<div class = "col-1 col-s-1">
  <div id = "menu-button">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
  </div>
</div>
<div class = "col-11">
    <?php if( isset($_SESSION['name'])) { ?>

      <!DOCTYPE html> 
      <html> 
      <body>  
        <div class="welcomeDropDown">
          <button id = "welcomeDropDownLoggedIn" class="welcomeDropDownBtn" onclick="">Welcome <?php echo htmlspecialchars($_SESSION["name"]); ?> </button>
          <div class="welcomeDropDown-content">
            <button onClick="window.location.href='/logout.php';">Log Out</button>
          </div>
        </div>
      </body> 
      </html>

    <?php } ?>

    <?php if(!isset($_SESSION['name'])) { ?>
      <!DOCTYPE html> 
      <html> 
      <body>  
        <div class="welcomeDropDown">
          <button id = "welcomeDropDownLoggedOut" class="welcomeDropDownBtn" onclick="">Welcome</button>
          <div class="welcomeDropDown-content">
            <button onClick="window.location.href='\login.php';">Log In</button>
          </div>
        </div>
      </body> 
      </html>
    <?php } ?>

</div>

<div id = "main">
  <div class="col-12 col-s-12">
    <h1>Inventory</h1>
  </div>
  <form action="addIngredient.php" method="post">
    
    <table style="width:100%">
      <tr>
        <th>Description</th>
        <th>Category</th>
        <th>Available</th>
        <th>Caffine</th>
        <th>Sugar Free</th>
        <th>Lactose</th>
      </tr>
      <tr>
        <td><input type="textbox" id="description" name="description" value=""></td>
        <td>
          <select name="category" id="category">
            <option value="coffee">coffee</option>
            <option value="milk">milk</option>
            <option value="tea">tea</option>
            <option value="flavoring">flavoring</option>
            <option value="topping">topping</option>
            <option value="other">other</option>
          </select>
        </td>
        <td><input type="checkbox" id="availability" name="availability" value="available"></td>
        <td><input type="checkbox" id="caffine" name="caffine" value="caffinated"></td>
        <td><input type="checkbox" id="sugar-free" name="sugar-free" value="sugarfree"></td>
        <td><input type="checkbox" id="lactose" name="lactose" value="lactose"></td>
      </tr>
    </table>
    <br>
    <input type="submit" value="Add to Inventory" class="btn">
  </form>
</div>
<div class = "col-3"></div>
<div class = "col-6">
  <form enctype='multipart/form-data' action='uploadData.php' method='post'>
    <label>Upload Product CSV file Here</label>
     
    <input size='50' type='file' name='filename'>
    <input class = "btn" type='submit' name='submit' value='Upload' style=" padding: 7px 16px;">
  </form>
</div>
<div class="col-12">
  <div class="col-5"></div>
  <div class="col-3">
    <button class="btn" onClick="window.location.href='downloadData.php'">Download Data</button>
  </div>
  <div class="col-4">
</div>
<div id=#inventory class="col-12">
<div>
  <h2>Flavorings</h2>
  <?php 
    require_once "connectToDB.php";

    // $query = "SELECT description, available FROM Ingredients WHERE category='flavoring'";//You don't need a ; like you do in SQL"
    $query = "SELECT Ingredients.itemID as id, description, available, category, caffinated, lactose, sugarFree FROM(((Ingredients LEFT OUTER JOIN Caffine ON Ingredients.itemID = Caffine.itemID)LEFT OUTER JOIN Lactose ON Ingredients.itemID = Lactose.itemID)LEFT OUTER JOIN SugarFree ON Ingredients.itemID = SugarFree.itemID) WHERE category = 'flavoring'";
    $result = $conn->query($query);
  
    echo"<form id='flavoringForm' action='updateInventory.php' method=post>";
    echo "<table>"; // start a table tag in the HTML
    echo "<tr><th>Description</th><th>Availability</th></tr>";
    while($row = $result->fetch_assoc()){   //Creates a loop to loop through results
      $caf = "";
      $lac = "";
      $sf = "";
      $avail = false;
      if($row['caffinated']=="1"){
        $caf = "Caf";
      }
      if($row['lactose']=="1"){
        $lac = "lac";
      }
      if($row['sugarFree']=="1"){
        $sf = "SF";
      }
      if($row['available']=="1")
        $avail = true;

      echo "<tr><td>" . $row['description'] . "</td><td> <input type ='checkbox' name=".$row['id']." id=".$row['id']." value = ".$row['id']." onchange='submitFlavForm()'></input></td><td>" .$caf. "</td><td>" .$lac."</td><td>".$sf."</td></tr>";  //$row['index'] the index here is a field name
      if($avail){
         echo"<script type='text/javascript'>document.getElementById('".$row['id']."').checked = true;</script>";
      }
     
    }

    echo "</table>"; //Close the table in HTML
    echo"</form>";
 //Make sure to close out the database connection -->
  ?>
</div>

<div>
  <h2>Milk</h2>
  <?php 
    require_once "connectToDB.php";

    // $query = "SELECT description, available FROM Ingredients WHERE category='flavoring'";//You don't need a ; like you do in SQL"
    $query = "SELECT description, available, category, caffinated, lactose, sugarFree FROM(((Ingredients LEFT OUTER JOIN Caffine ON Ingredients.itemID = Caffine.itemID)LEFT OUTER JOIN Lactose ON Ingredients.itemID = Lactose.itemID)LEFT OUTER JOIN SugarFree ON Ingredients.itemID = SugarFree.itemID) WHERE category = 'milk'";
    $result = $conn->query($query);
  

    echo "<table>"; // start a table tag in the HTML
    echo "<tr><th>Description</th><th>Availability</th></tr>";
    while($row = $result->fetch_assoc()){   //Creates a loop to loop through results
      $caf = "";
      $lac = "";
      $sf = "";
      if($row['caffinated']=="1"){
        $caf = "Caf";
      }
      if($row['lactose']=="1"){
        $lac = "lac";
      }
      if($row['sugarFree']=="1"){
        $sf = "SF";
      }
    echo "<tr><td>" . $row['description'] . "</td><td>" . $row['available'] . "</td><td>" .$caf. "</td><td>" .$lac."</td><td>".$sf."</td></tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>"; //Close the table in HTML

 //Make sure to close out the database connection -->
  ?>
</div>


<div>
  <h2>Coffee</h2>
  <?php 
    require_once "connectToDB.php";

    // $query = "SELECT description, available FROM Ingredients WHERE category='flavoring'";//You don't need a ; like you do in SQL"
    $query = "SELECT description, available, category, caffinated, lactose, sugarFree FROM(((Ingredients LEFT OUTER JOIN Caffine ON Ingredients.itemID = Caffine.itemID)LEFT OUTER JOIN Lactose ON Ingredients.itemID = Lactose.itemID)LEFT OUTER JOIN SugarFree ON Ingredients.itemID = SugarFree.itemID) WHERE category = 'coffee'";
    $result = $conn->query($query);
  

    echo "<table>"; // start a table tag in the HTML
    echo "<tr><th>Description</th><th>Availability</th></tr>";
    while($row = $result->fetch_assoc()){   //Creates a loop to loop through results
      $caf = "";
      $lac = "";
      $sf = "";
      if($row['caffinated']=="1"){
        $caf = "Caf";
      }
      if($row['lactose']=="1"){
        $lac = "lac";
      }
      if($row['sugarFree']=="1"){
        $sf = "SF";
      }
    echo "<tr><td>" . $row['description'] . "</td><td>" . $row['available'] . "</td><td>" .$caf. "</td><td>" .$lac."</td><td>".$sf."</td></tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>"; //Close the table in HTML

 //Make sure to close out the database connection -->
  ?>
</div>


<div>
  <h2>Tea</h2>
  <?php 
    require_once "connectToDB.php";

    // $query = "SELECT description, available FROM Ingredients WHERE category='flavoring'";//You don't need a ; like you do in SQL"
    $query = "SELECT description, available, category, caffinated, lactose, sugarFree FROM(((Ingredients LEFT OUTER JOIN Caffine ON Ingredients.itemID = Caffine.itemID)LEFT OUTER JOIN Lactose ON Ingredients.itemID = Lactose.itemID)LEFT OUTER JOIN SugarFree ON Ingredients.itemID = SugarFree.itemID) WHERE category = 'tea'";
    $result = $conn->query($query);
  

    echo "<table>"; // start a table tag in the HTML
    echo "<tr><th>Description</th><th>Availability</th></tr>";
    while($row = $result->fetch_assoc()){   //Creates a loop to loop through results
      $caf = "";
      $lac = "";
      $sf = "";
      if($row['caffinated']=="1"){
        $caf = "Caf";
      }
      if($row['lactose']=="1"){
        $lac = "lac";
      }
      if($row['sugarFree']=="1"){
        $sf = "SF";
      }
    echo "<tr><td>" . $row['description'] . "</td><td>" . $row['available'] . "</td><td>" .$caf. "</td><td>" .$lac."</td><td>".$sf."</td></tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>"; //Close the table in HTML

 //Make sure to close out the database connection -->
  ?>
</div>


<div>
  <h2>Toppings</h2>
  <?php 
    require_once "connectToDB.php";

    // $query = "SELECT description, available FROM Ingredients WHERE category='flavoring'";//You don't need a ; like you do in SQL"
    $query = "SELECT description, available, category, caffinated, lactose, sugarFree FROM(((Ingredients LEFT OUTER JOIN Caffine ON Ingredients.itemID = Caffine.itemID)LEFT OUTER JOIN Lactose ON Ingredients.itemID = Lactose.itemID)LEFT OUTER JOIN SugarFree ON Ingredients.itemID = SugarFree.itemID) WHERE category = 'topping'";
    $result = $conn->query($query);
  

    echo "<table>"; // start a table tag in the HTML
    echo "<tr><th>Description</th><th>Availability</th></tr>";
    while($row = $result->fetch_assoc()){   //Creates a loop to loop through results
      $caf = "";
      $lac = "";
      $sf = "";
      if($row['caffinated']=="1"){
        $caf = "Caf";
      }
      if($row['lactose']=="1"){
        $lac = "lac";
      }
      if($row['sugarFree']=="1"){
        $sf = "SF";
      }
    echo "<tr><td>" . $row['description'] . "</td><td>" . $row['available'] . "</td><td>" .$caf. "</td><td>" .$lac."</td><td>".$sf."</td></tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>"; //Close the table in HTML

 //Make sure to close out the database connection -->
  ?>
</div>

<div>
  <h2>Other</h2>
  <?php 
    require_once "connectToDB.php";

    // $query = "SELECT description, available FROM Ingredients WHERE category='flavoring'";//You don't need a ; like you do in SQL"
    $query = "SELECT description, available, category, caffinated, lactose, sugarFree FROM(((Ingredients LEFT OUTER JOIN Caffine ON Ingredients.itemID = Caffine.itemID)LEFT OUTER JOIN Lactose ON Ingredients.itemID = Lactose.itemID)LEFT OUTER JOIN SugarFree ON Ingredients.itemID = SugarFree.itemID) WHERE category = 'other'";
    $result = $conn->query($query);
  

    echo "<table>"; // start a table tag in the HTML
    echo "<tr><th>Description</th><th>Availability</th></tr>";
    while($row = $result->fetch_assoc()){   //Creates a loop to loop through results
      $caf = "";
      $lac = "";
      $sf = "";
      if($row['caffinated']=="1"){
        $caf = "Caf";
      }
      if($row['lactose']=="1"){
        $lac = "lac";
      }
      if($row['sugarFree']=="1"){
        $sf = "SF";
      }
    echo "<tr><td>" . $row['description'] . "</td><td>" . $row['available'] . "</td><td>" .$caf. "</td><td>" .$lac."</td><td>".$sf."</td></tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>"; //Close the table in HTML

 //Make sure to close out the database connection -->
  ?>
</div>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function submitFlavForm(){
  document.getElementById('flavoringForm').submit();
}
function check(item, value) {
    document.getElementById(item).checked = value;

}
</script>
   
</body>
</html> 


