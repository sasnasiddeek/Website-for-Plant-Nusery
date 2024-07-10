<?php 
session_start();
if(isset($_SESSION['Username'])) session_destroy();
header("location:../index.php");
?>