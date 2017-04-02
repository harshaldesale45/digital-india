<?php

require "init.php";

$message = $_POST["message"];
$date = $_POST["date"];

$response = array();

	$sql = "INSERT INTO notices (message, date) VALUES ('$message', '$date');";
	$result = mysqli_query($con, $sql);
	$code = "reg_success";
	$message = "Thank you for registering.";
	array_push($response, array("code"=>$code,"message"=>$message));
	echo json_encode($response);

mysqli_close($con);

?>