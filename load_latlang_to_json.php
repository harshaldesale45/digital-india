<?php
require 'init.php';
header('Content-Type: application/json');

$return['o']= array();
$sql="SELECT * from dangerzone WHERE flag=1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	array_push($return['o'],array('lat'=>$row[2],'longi'=>$row[3],'range'=>$row[5]));
}
echo json_encode($return);
?>