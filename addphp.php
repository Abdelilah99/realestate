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
	$adress = $_POST['adress'];
	$adresss = $_POST['adresss'];
	$id = $_POST['id'];
	$states = $_POST['states'];
	$zip = $_POST['zip'];
	$cases = $_POST['cases'];
	$files = $_POST['files'];
	$message = $_POST['message'];


	$sql_query="INSERT INTO ajouter(nom,prenom,adress,adresss,id,states,zip,cases,files,message)VALUES('$nom','$prenom','$adress','$adresss','$id','$states','$zip','$cases','$files','$message')";

	if (mysqli_query($conn,$sql_query)) {
		echo "inserted successfully";
	}
	else{
		echo"Error: " . $sql_query . "" .mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>