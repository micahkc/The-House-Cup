<?php
$postKeys = array_keys($_POST);
print_r($_POST);

require_once "connectToDB.php";



$sql = "UPDATE Ingredients
		Set available = '0'
		WHERE category='other'";
if (!($conn->query($sql) === TRUE)) {
			  echo "error: " . $conn->error;
			}
foreach($_POST as $key=>$value){


	$sql = "UPDATE Ingredients
			Set available = '1'
			WHERE itemID = '$key'";

	if (!($conn->query($sql) === TRUE)) {
	  echo "error: " . $conn->error;
	}
}
$conn->close();
header("location: inventory.php");
exit;

?>
