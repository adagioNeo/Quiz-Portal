<?php

$qbank = new mysqli('localhost','quiz','wert1234','student');
if($qbank->connect_error){
	die("Connection failed:".$conn->connect_error);
} 

$sql = "SELECT question FROM pqbank";
$q = $qbank->query($sql);
$arr = array();
while($row = $q->fetch_assoc()){
	array_push($arr,$row['question']);
} 
print_r($arr);
echo json_encode($arr);
include("qbank.html");
?>

