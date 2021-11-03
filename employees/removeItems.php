<?php
$postKeys = array_keys($_POST);
print_r($_POST);

require_once "connectToDB.php";



foreach($_POST as $key=>$value){
	echo $value;
 	

	$sql = "DELETE FROM Lactose
 			WHERE ItemID = '$value'";

	if (!($conn->query($sql) === TRUE)) {
	  echo "error: " . $conn->error;
	}

	$sql = "DELETE FROM Caffine
 			WHERE ItemID = '$value'";

	if (!($conn->query($sql) === TRUE)) {
	  echo "error: " . $conn->error;
	}

	$sql = "DELETE FROM sugarFree
 			WHERE ItemID = '$value'";

	if (!($conn->query($sql) === TRUE)) {
	  echo "error: " . $conn->error;
	}


	$sql = "DELETE FROM Ingredients
 			WHERE ItemID = '$value'";

	if (!($conn->query($sql) === TRUE)) {
	  echo "error: " . $conn->error;
	}
}
$conn->close();
header("location: inventory.php");
exit;

?>
