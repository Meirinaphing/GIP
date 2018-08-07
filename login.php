<?php

$conn = new PDO("mysql:host=localhost;dbname=spk","root","");

session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "select * from user where username='".$username."'";

$query = $conn->query($sql);


$temp_password = "";

foreach ($query as $row) {
	$temp_password = $row['password'];
	$iduser = $row['iduser'];
}

if ($password == $temp_password){
	$_SESSION["msg"]="ok";
	$_SESSION["user"]=$username;
	$_SESSION['iduser']=$iduser;
	header("Location: index.php");
}else{
	$_SESSION["msg"]= "Username Atau Password Salah";
	header("Location: index.php");
}


?>