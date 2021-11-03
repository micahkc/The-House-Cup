<?php
// Initialize the session
  session_start();



  if (!(isset($_POST['red']))){
	    $csvFile = file('colors.csv');
	    $data = [];
	    foreach ($csvFile as $line) {
	        $data[] = str_getcsv($line);
	    }
	 	$r=$data[0][0];
	 	$g=$data[0][1];
	 	$b=$data[0][2];
	    $color = sprintf("#%02x%02x%02x", $r, $g, $b);
	    


	  
  }
  else{
  	  $r=$_REQUEST["red"];
	  $g=$_REQUEST["green"];
	  $b=$_REQUEST["blue"];
	  
	  $color = sprintf("#%02x%02x%02x", $r, $g, $b);
	  $list = array (
	    array($r, $g ,$b)
	  );

	  $file = fopen("colors.csv","w");

	  foreach ($list as $line) {
	    fputcsv($file, $line);
	  }

	  fclose($file);
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
  <a href="home.php">Home</a>
  <a href="order.php">Order</a>
  <a href="changeLights.php">Lights</a>
  <a href="about.php">About</a>
  <a href="merchandise.php">Merch</a>
  <a href="employees.php">Employees</a>
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
            <button onClick="window.location.href='logout.php';">Log Out</button>
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
            <button onClick="window.location.href='login.php';">Log In</button>
          </div>
        </div>
      </body> 
      </html>
    <?php } ?>

</div>

<div id = "main">
  <div class="col-12 col-s-12" style="background: white">
    <h1>Change Lights</h1>
  </div>
  <div class="col-12 col-s-12" id="allLights">
    <h1>All Lights </h1>
    <form method="post" id="colorForm" action="<?php echo $_SERVER['PHP_SELF'];?>">
    	<input type="color" id="color" value="<?php echo (isset($color))?$color:'';?>">
		<input type="hidden" id="red" name="red" value="<?php echo (isset($r))?$r:'';?>"/>
		<input type="hidden" id="green" name="green" value="<?php echo (isset($g))?$g:'';?>"/>
		<input type="hidden" id="blue" name="blue" value="<?php echo (isset($b))?$b:'';?>"/>
		<input type="submit">
	</form>
  </div>
</div>

<script>


function hexToRgb(hex) {
  var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  return result ? {
    r: parseInt(result[1], 16),
    g: parseInt(result[2], 16),
    b: parseInt(result[3], 16)
  } : null;
}


let colorInput = document.querySelector('#color');
let red = document.getElementById("red");
let green = document.getElementById("green");
let blue = document.getElementById("blue");
let colorBackground = document.querySelector('#allLights')
colorBackground.style.background = colorInput.value;
colorInput.addEventListener('input', () =>{
  let color=colorInput.value;
  red.value=hexToRgb(color).r;
  green.value=hexToRgb(color).g;
  blue.value=hexToRgb(color).b;
  //window.alert(hexToRgb(color).r,hexToRgb(color).g,hexToRgb(color).r);
  //document.getElementById("colorForm").submit();
  // window.alert(color);
  colorBackground.style.background = color;
})
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<?php 
 
?>
</body>
</html> 