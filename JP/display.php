<link rel="stylesheet"  href="a.css">
<?php

include("connection.php");
error_reporting(0);
$query="SELECT *FROM STUDENT";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);



?>
  <table>
      <tr>
          <th>roll no</th>
          <th>name</th>
          <th>class</th>
          <th colspan="2">Operations</th>
</tr>

<?php
while($result=mysqli_fetch_assoc($data))
{
    
    echo  "<tr>
       <td>".$result['rollno']."</td>
       <td>".$result['name']."</td>
       <td>".$result['class']."</td>
       <td><a href='update.php?rn=$result[rollno] &sn=$result[name] &cl=$result[class]'>edit</td>
       <td><a href='delete.php?rn=$result[rollno] &sn=$result[name] &cl=$result[class]'>delete</td>
       
</tr>";
}




?>
