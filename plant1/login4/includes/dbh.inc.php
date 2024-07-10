<?php 

$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="project";

$conn =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
 
 //checking the connection
/*if(mysqli_connect_errno()){

	die('data base connection error'.mysqli_connect_error());
}else{
	echo "connecrion succsesful";
}*/