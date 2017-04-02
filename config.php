<?php
$currency = '&#8377; '; //Currency Character or code
$host = "localhost";
$user = "id1182415_local";
$password = "harshal";
$db = "id1182415_1234";



$shipping_cost      = 1.50; //shipping cost
$taxes              = array( //List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );						
//connect to MySql						
$mysqli = new mysqli($host, $user, $password, $db);		
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>