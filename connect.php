<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message =$_POST['message'];

if (!empty($nom) || !empty($prenom) || !empty($email) || !empty($phone) || !empty($message)) {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "fesrent";


	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

	if (mysql_connect_error()) {
		die('connect error('.mysql_connect_errno().')'.mysql_connect_error());
	}else{
		$SELECT = "SELECT email FROM acheter where email = ? LIMIT 1";
	    $INSERT = "INSERT Into acheter(nom,prenom,email,phone,message)values(?,?,?,?,?)";

	    $stmt = $conn->prepare($SELECT);
	    $stmt->bind_param("s",$email);
	    $stmt->execute();
	    $stmt->bind_result($email);
	    $stmt->store_result();
	    $stmt->$stmt->num_rows;
	    if ($rnum == 0) {
	    	$stmt->close();
	    	$stmt = $conn->prepare($INSERT);
	    	$stmt->bind_param("sssis"$nom,$prenom,$email,$phone,$message);
	    	$stmt->execute();
	    	echo("new record inserted succefully");
	    }else{
	    	echo("someone already registred with this email");
	    }
	    $stmt->close();
	    $conn->close();
	}

}else{
	echo "all field required";
	die();
}
?>