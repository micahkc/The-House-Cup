<?php
// Initialize the session
	session_start();
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
html{background-color: white}
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
/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

/*----------------------------------start of copied css from "buildYourOwn2.html" --------------------------------------------*/

.container{
	 	position: relative;
	 	/*margin:auto;*/
}

.container .mySlides img{
	width:100%;
	height: 80vh;
}
.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  background-color: #f1f1f1;
  background-color: #ff8000;
  border: none;
  font-size: 18px;
  color: white;
  padding: 15px 32px;
  text-align: center;
}

.container .btn:hover {
  /*background-color: black;
  color: white;*/
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  cursor: pointer;
}

.container .btn:focus {
  background-color: black;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  cursor: pointer;
}
/*drop down menus*/
.container.dropdown{
  display: inline-block;
}
.container .dropdown .dropDownBtn {
  position: absolute;
  top: 50%;
  left: 50%;
  background-color: #f1f1f1;
  background-color: #ff8000;
  border: none;
  font-size: 18px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  max-width: 180px;

}
.container .dropdown .dropdown-content {
  position: absolute;
  top: 50%;
  left: 50%;
  position: absolute;
  display: none;
  z-index: 1;
}
.container .dropdown .dropdown-content button{  
  background-color: #f1f1f1;
  background-color: #ff8000;
  border: none;
  font-size: 18px;
  color: white;
  padding: 15px 32px;
  text-align: left;
  min-width: 160px;
  /*max-width: 180px;*/
  display: block;
}
.container .dropdown .dropdown-content button:hover{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  cursor: pointer;
}
.container .dropdown:hover .dropdown-content {
	display: block;
}
.container .dropdown:focus .dropdown-content{
	display: block;
}


	#hotBtn{
		transform: translate(-50%, -250%);
		-ms-transform: translate(-50%, -250%);
	}
	#coldBtn{
		transform: translate(-50%, 150%);
	 	-ms-transform: translate(-50%, -150%);
	}
	#hereBtn{
		transform: translate(-50%, -250%);
		-ms-transform: translate(-50%, -250%);
	}
	#togoBtn{
		transform: translate(-50%, 150%);
	 	-ms-transform: translate(-50%, -150%);
	}

	#coffeeBtn{
		transform: translate(-50%, -300%);
	 	-ms-transform: translate(-50%, -350%);
	}




	#milkGeneralBtn{
		transform: translate(-50%, -50%);
	 	-ms-transform: translate(-50%, -50%);
	}
	#sparklingWaterBtn{
		transform: translate(-50%, 250%);
	 	-ms-transform: translate(-50%, 250%);
	}
	#roastDropId{
		transform: translate(-110%, -200%);
	 	-ms-transform: translate(-110%, -200%);

/*	 	padding: 0px 15px;
	 	max-width:10em;
	 	white-space:nowrap;
  		overflow:hidden;
	 	max-width: 160px;*/
	}
	#roastBtn{
		transform: translate(-70%, -350%);

	}
	#milkDropId{
		transform: translate(-110%, 100%);
	 	-ms-transform: translate(-110%, 100%);
	}
	#milkBtn{
		transform: translate(-70%, -50%);
	}
	#coffeeMethodBtn{
		transform: translate(-50%, -400%);
	 	-ms-transform: translate(10%, -200%);
	}
	#coffeeRoastBtn{
		transform:translate(130%, -400%);
	}
	#coffeeAmtBtn{
		transform: translate(35%, -250%);
	}

	#amountId{
		transform: translate(10%, 100%);
	 	-ms-transform: translate(10%, 100%);
	}
	#amountBtn{
		transform: translate(0%, -50%);
	}

	#flavoringsListed{
		position: absolute;
	  	top: 50%;
	  	left: 50%;
	  	color:white;
		transform: translate(-50%, -50%);
		font-size: 12px;
		column-count:3;
		column-gap: 10px;

	}
	#toppingsListed{
		position: absolute;
	  	top: 50%;
	  	left: 50%;
	  	color:white;
		transform: translate(-50%, -50%);
	}
	#placeOrder{
		transform: translate(-50%, 0%);
	 	-ms-transform: translate(-50%, 0%);
	}

	.drinkImg img{
		display: block;
  		margin-left: auto;
  		margin-right: auto;
		width: 50%;
		padding: 20px;
	}


#slideHeader{
	position: absolute;
	top: 50%;
	left: 50%;
	border: none;
	font-size: 18px;
	color: white;
	padding: 15px 32px;
	text-align: center;
	transform: translate(-50%, -250%);
	-ms-transform: translate(-50%, -220%);
}
	.prev, .next {
	  cursor: pointer;
	  position: absolute;
	  top: 50%;
	  width: auto;
	  padding: 16px;
	  margin-top: -22px;
	  color: white;
	  font-weight: bold;
	  font-size: 18px;
	  transition: 0.6s ease;
	  border-radius: 0 3px 3px 0;
	  user-select: none;
	}

	/* Position the "next button" to the right */
	.next {
	  right: 2%;
	  border-radius: 3px 0 0 3px;
	}

	/* On hover, add a black background color with a little bit see-through */
	.prev:hover, .next:hover {
	  background-color: rgba(0,0,0,0.8);
	}

	.dot {
	  cursor: pointer;
	  height: 15px;
	  width: 15px;
	  margin: 0 2px;
	  background-color: #bbb;
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 0.6s ease;
	}

	.active, .dot:hover {
	  background-color: #717171;
	}

	/* Fading animation */
	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 1.5s;
	  animation-name: fade;
	  animation-duration: 1.5s;
	}

	@-webkit-keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	@keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
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

	  	#hotBtn{
			transform: translate(-175%, -50%);
		}	
		#coldBtn{
			transform: translate(75%, -50%);
		}
	  	#hereBtn{
			transform: translate(-175%, -50%);
		}	
		#togoBtn{
			transform: translate(75%, -50%);
		}
		#coffeeBtn{
			transform: translate(-215%, -300%);
		}
			#coffeeMethodBtn{
				transform: translate(-50%, -375%);
			}
			#coffeeRoastBtn{
				transform:translate(130%, -375%);
			}
			#coffeeAmtBtn{
				transform: translate(30%, -225%);
			}
		#milkBtn{
			transform: translate(-250%, -25%);
		}
			#milkTypeBtn{
				transform: translate(-50%, -25%);
			}
			#milkAmtBtn{
				transform: translate(110%, -25%);
			}
		#sparklingWaterBtn{
			transform: translate(-150%, 250%);
		}
			#sparklingWaterAmtBtn{
				transform: translate(30%, 250%);
			}
		

		.coffeeMenu{
			display: none;
		}
		.milkMenu{
			display: none;
		}
		.sparklingWaterMenu{
			display: none;
		}



		#addFlavoringBtn{
			transform: translate(-50%,-50%);
		}
		
		#slideHeader{
			transform: translate(-50%, -240%);
			-ms-transform: translate(-50%, -220%);
		}
		#popup{
			display: none;
			text-align: center;
	        position: absolute;
	        width: 300px; height: 500px;
	        left: 71%; top: 32%;
	        margin: -155px 0 0 -300px;
	        border: solid 2px #cccccc;
	        background-color: #ffffff;
	        z-index: 5;
		}
		#popup #closebtn{
			 position: absolute;
			 top: 0;
			 right: 10px;
			 font-size: 36px;
			 margin-left: 50px;
			 text-decoration: none;
			 color: black;
		}
		#popup #closebtn:hover{
			 color: grey;
		}
		#PopupOverlay {
	        display: none;
	        position: fixed;
	        left: 0px; right: 0px;
	        top: 0px; bottom: 0px;
	        background-color: #000000;
	        opacity:.75;
	        z-index:4;
	    }

	    .optionListBtn{
	    	width: 290px;
			background-color: #ff8000;
			border: none;
			font-size: 18px;
			color: white;
			padding: 15px 32px;
			text-align: center;
	    }
	    .optionListBtn:hover{
	    	/*box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);*/
  			cursor: pointer;
  			background-color: black;
	    }
	   

	}
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
<div id="PopupOverlay"></div>
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


<!-- --------------------------------------------------begining of copied code from "buildYourOwn2.html" ------------------------------------>



<div class="row">
		<!-- spacing -->
		<div class= "col-1 col-s-1" style="overflow: auto">
			<h1></h1>
		</div>
		<!---------- choice slides ---------->
		<div class= "col-7 col-s-7 container">
			<div id="popup">
				<h1>popup window</h1>
				<a href="javascript:void(0)" id="closebtn" onclick="closePopup()">&times;</a>
				<div id="optionList"></div>
			</div>
			<div class="mySlides fade TempSlide"> <!-- temp -->
                <img src="images/palletBoard.jpg" alt="palletBoards">
	            <button id = "hotBtn" class="btn" onclick="updateOrder('TempSlide','hotBtn', 'hot')">Hot</button>
	            <button id = "coldBtn" class="btn" onclick="updateOrder('TempSlide','coldBtn','iced')">Cold</button>
	            <div id="slideHeader"><h1>Temperature</h1></div>
	        </div>
	        <div class="mySlides fade locationSlide"> <!-- here/to-go -->
                <img src="images/palletBoard.jpg" alt="palletBoards">
                <div id="slideHeader"><h1>Location</h1></div>
                <button id = "hereBtn" class="btn" onclick="updateOrder('locationSlide','hereBtn','here')">Here</button>
               	<button id = "togoBtn" class="btn" onclick="updateOrder('locationSlide','togoBtn','togo')">To Go</button>
	        </div>
	        <div class="mySlides fade baseSlide"> <!-- base -->
                <img src="images/palletBoard.jpg" alt="palletBoards">
                <div id="slideHeader"><h1>Base</h1></div>

                <button id = "coffeeBtn" class="btn" onclick="openOptions('coffeeBtn', 'coffeeMenu')">Coffee</button>
               	<button id = "milkBtn" class="btn" onclick="openOptions('milkBtn', 'milkMenu')">Milk</button>
               	<button id = "sparklingWaterBtn" class="btn" onclick="openOptions('sparklingWaterBtn', 'sparklingWaterMenu')">Sparkling Water</button>
               	<div class="coffeeMenu">
               		<div style="width:50%"></div>
               		<button class="btn" id="coffeeMethodBtn" onclick="popup('coffeeMethodBtn')">Method</button>
               		<button class="btn" id="coffeeRoastBtn">Roast</button>
               		<button class="btn" id="coffeeAmtBtn">Amount</button>
				</div>

				<div class="milkMenu">
               		<div style="width:50%"></div>
					<button class="btn" id = "milkTypeBtn">Type</button>
					<button class="btn" id = "milkAmtBtn">Amount</button>
				</div>
				<div class="sparklingWaterMenu">
					<button class="btn" id ="sparklingWaterAmtBtn">Amount</button>
				</div>

	        </div>
	        <div class="mySlides fade flavSlide"> <!-- Flavoring -->
                <img src="images/palletBoard.jpg" alt="palletBoards">
                <div id="slideHeader"><h1>Flavoring</h1></div>
            	<button class="btn" id="addFlavoringBtn">Add Flavoring</button>
	        </div>
	        <div class="mySlides fade toppingSlide"> <!-- toppings -->
                <img src="images/palletBoard.jpg" alt="palletBoards">
                <div id="slideHeader"><h1>Toppings</h1></div>
                <div id="toppingsListed"></div>
            </div>
	        

	    	
	        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
         	<a class="next" onclick="plusSlides(1)">&#10095;</a>
         	<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
				<span class="dot" onclick="currentSlide(4)"></span>
				<span class="dot" onclick="currentSlide(5)"></span>  
        	</div>
		</div>
		<!-- drink image -->
		<div class= "col-4 col-s-4">
			<h1 style="text-align: center">Your Drink</h1>
<!-- 			<div class = "drinkImg" id = "iced">
		      <img src="iced.jpg" alt="drink">
		    </div>
		    <div class = "drinkImg" id="hot">
		      <img src="hot.jpg" alt="drink">
		    </div>
 -->		<div class="container">
		    	<button id = "placeOrder" class="btn" onclick="placeOrder()">Place Order</button>
		    </div>
		</div>
	</div>
	<!-- style="display: none" -->
	<form id="submitOrder" action="submitOrders.php" style="display: none" >

		<input class = "submitOrderForm" type="text" id="drinkName" name="drinkName" value=""><br>
		<input class = "submitOrderForm" type="text" id="temp" name="temp" value=""><br>
		<input class = "submitOrderForm" type="text" id="location" name="location" value=""><br>
		<!-- coffee method -->
		<input class = "submitOrderForm" type="text" id="startCoffeeMethod" name="startCoffeeMethod" value="startCoffeeMethod"><br>
		<div id="coffeeMethod"></div>
		<input class = "submitOrderForm" type="text" id="endCoffeeMethod" name="endCoffeeMethod" value="endCoffeeMethod"><br>
		<!-- coffee roast -->
		<input class = "submitOrderForm" type="text" id="startCoffeeRoast" name="startCoffeeRoast" value="startCoffeeRoast"><br>
		<div id="coffeeRoast"></div>
		<input class = "submitOrderForm" type="text" id="endCoffeeRoast" name="endCoffeeRoast" value="endCoffeeRoast"><br>
		<!-- milk -->
		<input class = "submitOrderForm" type="text" id="startMilk" name="startMilk" value="startMilk"><br>
		<div id="milk"></div>
		<input class = "submitOrderForm" type="text" id="endMilk" name="endMilk" value="endMilk"><br>
		<!-- sparking water -->
		<input class = "submitOrderForm" type="text" id="startSparklingWater" name="startSparklingWater" value="startSparklingWater"><br>
		<div id="sparklingWater"></div>
		<input class = "submitOrderForm" type="text" id="endSparklingWater" name="endSparklingWater" value="endSparklingWater"><br>
		<!-- flavoring -->
		<input class = "submitOrderForm" type="text" id="startFlavoring" name="startFlavoring" value="startFlavoring"><br>
		<div id="flavoring"></div>
		<input class = "submitOrderForm" type="text" id="endFlavoring" name="endFlavoring" value="endFlavoring"><br>
		<!-- Topping -->
		<input class = "submitOrderForm" type="text" id="startTopping" name="startTopping" value="startTopping"><br>
		<div id="coffeeMethod"></div>
		<input class = "submitOrderForm" type="text" id="endTopping" name="endTopping" value="endTopping"><br>

		<input id="submitOrderBtn" type="submit" value="Submit">

	</form> 


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


var buttonList = ["hotBtn","coldBtn","herebtn", "togoBtn", "coffeeBtn", "milkBtn", "sparklingWaterBtn"];
var clickTracker = new Array(buttonList.length).fill(0);

function updateOrder(slide, buttonPressed, value){

	if(slide=="TempSlide"||slide=="locationSlide"){
		var currentSlide = document.getElementsByClassName(slide);
		btns = currentSlide[0].getElementsByTagName("button");
		for(i=0;i<btns.length;i++){
			btns[i].style.background= "#ff8000";
		}
		var currentBtn = document.getElementById(buttonPressed);
		currentBtn.style.background = "black";
		document.getElementById("temp").value=value;
		if(slide="locationSlide"){
			document.getElementById("temp").value=value;
			window.alert(document.getElementById("temp").value);
		}
		else{
			document.getElementById("location").value=value;
			window.alert(document.getElementById("location").value);
		}
	}
	else if(slide=="coffeeMethodBtn"){
		window.alert(buttonPressed);
	}
}
function openOptions(buttonPressed, options){
	var idx = buttonList.indexOf(buttonPressed);
	var timesClicked = clickTracker[idx]+=1;
	var currentBtn = document.getElementById(buttonPressed);
	var options = document.getElementsByClassName(options);
	if (timesClicked % 2 == 0){
		currentBtn.style.background = "#ff8000";
		options[0].style.display = "none";
	}
	else{
		currentBtn.style.background = "black";
		options[0].style.display = "block";
	}
	
}

function popup(buttonPressed){
	var popup = document.getElementById("popup");
	var overlay = document.getElementById("PopupOverlay");
	var btns = "";
	switch(buttonPressed){
		case ("coffeeMethodBtn"):
		 	var header = popup.querySelector("h1");
		 	header.innerHTML = "Method";
		 	var list = document.getElementById("optionList");
		 	value= 'espresso'
		 	button = 'coffeeMethodBtn'
		 	Slide = 'baseSlide'
		 	btns += "<button class='optionListBtn' onClick='updateOrder(slide,button,value)'>Espresso</button><br>";
		 	btns += "<button class='optionListBtn'>Turkish Coffee</button>";
		 	btns += "<button class='optionListBtn'>French Press</button>";
		 	btns += "<button class='optionListBtn'>Pour Over</button>";
		 	btns += "<button class='optionListBtn'>Moka Pot</button>";

		 	list.innerHTML = btns;
		 	break;
		default:
			window.alert("error");
		}


	popup.style.display = "block";
	overlay.style.display = "block";
}
function closePopup(){
	var popup = document.getElementById("popup");
	var overlay = document.getElementById("PopupOverlay");
	popup.style.display = "none";
	overlay.style.display = "none";
}
</script>
   
</body>
</html> 