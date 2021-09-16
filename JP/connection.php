<?php
$servername="localhost";
$username="root";
$password="";
$dbname="jpwebphp";
$con=mysqli_connect($servername,$username,$password,$dbname);
if($con){
     
}
else
{
    echo"connection failed";
    die("connection failed".mysqli_error());
}
?>