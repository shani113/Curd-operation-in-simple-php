<?php


include("connection.php");


$rollno=$_GET['rn'];
    $name= $_GET['sn'];
    $class=$_GET['cl'];

  $query="delete from student where rollno='$rollno'";
  $data=mysqli_query($con,$query);
  if($data){
      echo "record deleted";

  }
  else {
           echo "not deleted";
  }
 ?>