<?php
	$handle = fopen($_FILES['filename']['tmp_name'], "r");
	$headers = fgetcsv($handle, 1000, ",");
	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

		$availability = 0;
		$caffine = false;
		$sugarFree = false;
		$lactose = false;
		$description = $data[0];
		$category = $data[1];

		if($data[2] == '1'){
			$availability = 1;
		}
		if($data[3] == '1'){
			$caffine = true;
		}
		if($data[4] == '1'){
			echo "happening";
			$sugarFree = true;
		}
		if($data[5] == '1'){
			$lactose = true;
		}

		require_once "connectToDB.php";

		$sql = "SELECT * FROM Ingredients WHERE description='$description'";//check if there already exists an entry with this description
		$result = $conn->query($sql);
		if (!($result->num_rows > 0)){
			$sql = "INSERT INTO Ingredients (description, available, category) values('$description', '$availability', '$category')";//insert into ingredients
			if (!($conn->query($sql) === TRUE)) {
			  echo "error: " . $conn->error;
			}
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
			echo "sugarFree";
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
	fclose($handle);
	$conn->close();
	header("location: inventory.php");
	exit;
	?>