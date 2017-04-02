<?php

require "init.php";

$id = $_POST["id"];
$username = $_POST["username"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$description = $_POST["description"];
$address= $_POST["address"];
$others= $_POST["others"];
$crops= $_POST["crops"];
$problems= $_POST["problems"];
$radio_option= $_POST["radio_option"];

$sql = "SELECT * FROM donation WHERE id LIKE '".$id."';";
$result = mysqli_query($con, $sql);
$response = array();

if(mysqli_num_rows($result) > 0)
{
	$code = "reg_failed";
	$message = "User already exist.";
	array_push($response, array("code"=>$code,"message"=>$message));
	echo json_encode($response);
}
else
{
	$sql = "INSERT INTO donation (username, id, name, phone, description, address, others, crops, problems, radio_option) VALUES ('$username', '$id', '$name', '$phone', '$description', '$address', '$others', '$crops', '$problems', '$radio_option' );";
	$result = mysqli_query($con, $sql);
	$code = "reg_success";
	$message = "Thank you for registering.";
	array_push($response, array("code"=>$code,"message"=>$message));
	echo json_encode($response);
}

mysqli_close($con);

?>