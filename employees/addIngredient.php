<?php
$postKeys = array_keys($_POST);
// print_r($_POST);

require_once "connectToDB.php";

$availability=0;
$caffine=false;
$sugarFree=false;
$lactose=false;


foreach($_POST as $key=>$value){
	if($key=="description"){
		// echo $value;
		$description = $value;
	}
	else if($key=="category"){
		// echo $value;
		$category = $value;
	}
	else if($key=="availability"){
		$availability=1;
	}
	else if($key=="caffine"){
		$caffine=true;
	}
	else if($key=="sugar-free"){
		$sugarFree=true;
	}
	else if($key=="lactose"){
		$lactose=true;
	}
 }

	$sql = "SELECT * FROM Ingredients WHERE description='$description'";//check if there already exists an entry with this description
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "<script type='text/javascript'>alert('This item already exists in the database.');</script>";
	}
	else{
		$sql = "INSERT INTO Ingredients (description, available, category) values('$description', '$availability', '$category')";//insert into ingredients
		if (!($conn->query($sql) === TRUE)) {
		  echo "error: " . $conn->error;
		}
		$sql = "SELECT itemID FROM Ingredients WHERE description='$description'";
		$idNumber = $conn->query($sql);
		$id = $idNumber->fetch_assoc()["itemID"];
		// echo $id["itemID"];
		if($caffine){
			$sql = "INSERT INTO Caffine values ('$id', '1')";
			if (!($conn->query($sql) === TRUE)) {
			  echo "error: " . $conn->error;
			}
		}
		if($sugarFree){
			$sql = "INSERT INTO SugarFree values ('$id', '1')";
			if (!($conn->query($sql) === TRUE)) {
			  echo "error: " . $conn->error;
			}
		}
		if($lactose){
			$sql = "INSERT INTO Lactose values ('$id', '1')";
			if (!($conn->query($sql) === TRUE)) {
			  echo "error: " . $conn->error;
			}
		}
	}
	$conn->close();
	header("location: inventory.php");
	exit;

?>
<style>
.btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);

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
</style>
<!DOCTYPE html> 
<html> 
<body>	
	<div style="width: 100%"><button class="btn" onclick="window.location.href='inventory.php';">Inventory</button></div>
</body> 
</html>



<!-- $sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
 -->
