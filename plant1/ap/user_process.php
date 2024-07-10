<?php
/**
 * Created by PhpStorm.
 * User: ZiaulHaque
 * Date: 11-10-2015
 * Time: 18:25
 */
include("dbconnect.php");
/*$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
*/
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$user=$_REQUEST['user'];
$password=$_REQUEST['password'];
$address=$_REQUEST['address'];
$contact=$_REQUEST['contact'];
$item=$_REQUEST['item'];
$pices=$_REQUEST['pices'];
$place=$_REQUEST['place'];
$date=$_REQUEST['date'];
$message=$_REQUEST['message'];

/*
 * Inserting data to table
 * */

/*$query=mysqli_query($db_connect,"INSERT INTO user (fname, lname, email) VALUES ('$fname','$lname','$email')") or die(mysqli_error($db_connect));
*/

$query=mysqli_query($db_connect,"insert into orders(CustomerName,Email,UserName,Password,CustomerAddress,ContactNumber,ItemNumber,Pices,DiliverPlace,DiliverDate,Message) values ('$name','$email','$user','$password','$address',$contact,'$item',$pices,'$place',$date,'$message')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:index.php?note=success");