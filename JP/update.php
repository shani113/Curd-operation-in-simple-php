<?php
include("connection.php");
error_reporting(0);

echo $_GET['rn'];
echo $_GET['sn'];
echo $_GET['cl'];

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
   Rollno<input type="text" name="rollno" value="<?php echo$_GET['rn']; ?>"/><br><br>
   Name<input type="text"   name="name"   value="<?php echo$_GET['sn']; ?>"/><br><br>
   Class<input type="text"   name="class"   value="<?php echo$_GET['cl']; ?>"/><br><br>
   <input type="submit"   name="submit"   value="submit"/>
   </form>
   <?php
   if($_GET['submit'])
   {

    $rollno=$_GET['rollno'];
    $name= $_GET['name'];
    $class=$_GET['class'];
       $query="update student set name='$name',class='$class' where rollno='$rollno'";
       $data=mysqli_query($con,$query);
      if($data){
          echo"data inserted.<a href='display.php'>check updated list here</a>";
      }
       
    
    else {
        echo" data not inersted";

    }

   }

  


?>
</body>
</html>
