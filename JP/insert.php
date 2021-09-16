<?php
include("connection.php");
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet"  href="a.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action=""  method="GET">
   Rollno<input type="text" name="rollno" value=""/><br><br>
   Name<input type="text"   name="name"   value=""/><br><br>
   Class<input type="text"   name="class"   value=""/><br><br>
   <input type="submit"   name="submit"   value="submit"/>
   </form>
   <?php
   if($_GET['submit'])
   {
       $rn=$_GET['rollno'];
       $sn=$_GET['name'];
       $cl=$_GET['class'];
       if($rn!=""  &&$sn!=""  && $cl!="" )
       {
        $query="INSERT INTO STUDENT VALUES('$rn','$sn','$cl')";
        $data=mysqli_query($con,$query);
        if($data){
            echo" data inserted into database ";

        }
    }
        else{
            echo"enter the data";
        }

       
    }



  


?>
</body>
</html>
