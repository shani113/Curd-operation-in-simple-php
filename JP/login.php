

<?
  include ("connection.php");

?>
<form action=""  method="post">
username<input type="text" name="username" value=""/><br><br>
username<input type="text" name="password" value=""/><br><br>
<input type="submit"  name="submit" value="login"/><br>
</form>
<?php
if(isset($_POST['submit']))
{
    $user=$_POST['username'];
    $pwd=$_POST['password'];
    $query="SELECT * FROM STUDENT WHERE username='$user'  && password='$pwd'";
   $data =mysqli_query($con,$query);
   $total=mysqli_num_rows($data);
   echo $total;
   
}


?>