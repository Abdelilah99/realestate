<?php
$servername = "localhost";
$username = "root";
$password="";
$database_name="fesrent";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if (!$conn) {
	die("connection failed" .mysqli_connect_error());
}
if (isset($_POST['save'])) {
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$messages = $_POST['messages'];

	$sql_query="INSERT INTO acheter(nom,prenom,email,phone,messages)VALUES('$nom','$prenom','$email','$phone','$messages')";

	if (mysqli_query($conn,$sql_query)) {
		echo "inserted successfully";
	}
	else{
		echo"Error: " . $sql_query . "" .mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>