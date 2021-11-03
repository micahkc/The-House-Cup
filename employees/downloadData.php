<?php

require_once "connectToDB.php";

// $result=mysqli_query($conn, "Select * Ingredients");
$query="SELECT * FROM Ingredients";
$result = $conn->query($query);
$xml = new DOMDocument("1.0");

// It will format the output in xml format otherwise
// the output will be in a single row
$xml->formatOutput=true;
$Ingredients=$xml->createElement("Ingredients");
$xml->appendChild($Ingredients);
while($row = $result->fetch_assoc()){
    $item=$xml->createElement("item");
    $Ingredients->appendChild($item);
     
    $id=$xml->createElement("description", $row['description']);
    $item->appendChild($id);
     
    $availability=$xml->createElement("available", $row['available']);
    $item->appendChild($availability);
     
    $category=$xml->createElement("category", $row['category']);
    $item->appendChild($category);     
}

echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("inventory.xml");
echo "<script type='text/javascript'>hello();</script>";
// header("location: inventory.php");
// exit();
//echo"<script type='text/javascript'>document.getElementById('".$row['id']."').checked = true;</script>";


?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>hi</h1>
	<script>
		forceDownload();
		rerout();
		function hello(){
			window.alert("hi");
		}
		function forceDownload() {
			href = "inventory.xml";
			var anchor = document.createElement('a');
			anchor.href = href;
			anchor.download = href;
			document.body.appendChild(anchor);
			anchor.click();
			
		}
		function rerout(){
			window.location.href='inventory.php';
		}
	</script>
</body>

</html>



