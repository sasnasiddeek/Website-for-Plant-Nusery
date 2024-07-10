<?php
    $localhost="localhost";
    $dbname="online_exams";
    $dbuser="root";
    $dbpass="";

    $link=new mysqli($localhost,$dbuser,$dbpass,$dbname);
    if($link){
    	//echo "conntion established";
    }else{
    	echo "error somthing went wrong !!!";
    }







?>