<?php
  
       if($_SERVER['REQUEST_METHOD']=='POST'){
           $student=$_POST['student'];
           $index=$_POST['index'];
           $web=$_POST['web'];
           $java=$_POST['java'];
           $mobile=$_POST['mobile'];

           if($student=='' || $index=='' || $web=='' || $java=='' || $mobile==''){
              echo "Please fill out all the fields";
         }else{

             $query="insert into student(StudentName,StudentIndex,WebProgramming,JavaProgramming,MobileAppDevelopment) values('$student',$index,$web,$java,$mobile)";

             $result=$link->query($query);
             if($result){
                 echo "Student added successfully";
             }else{
                echo "Error Student not added";
           }
          

       }

     }

?>

