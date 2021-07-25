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
	$message = $_POST['message'];

	$sql_query="INSERT INTO louer(nom,prenom,email,phone,message)VALUES('$nom','$prenom','$email','$phone','$message')";

	if (mysqli_query($conn,$sql_query)) {
		echo "inserted successfully";
	}
	else{
		echo"Error: " . $sql_query . "" .mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>