<?php

include("connection.php");
$query="INSERT INTO STUDENT VALUES('19','fatima','MBA')";
$data=mysqli_query($con,$query);
if($data){
    echo" data inserted into database ";
}
?>
