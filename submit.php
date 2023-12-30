<?php
 
 include "conn.php";
 

$username = $_POST['username'];
$idnum = $_POST['userid'];
$email = $_POST['useremail'];
$outdate = $_POST['bday'];
$reason = $_POST['message'];

 
 $query1 = "INSERT INTO reg VALUES('$idnum','$username','$email','$outdate','$reason')";
 
 
 if(mysqli_query($con,$query1))
 {
 echo "registration is successful  ";
 }
 else
 {
  echo "error;".mysqli_error($con);
  
  
 }
      
?>
<form>
 <a class="nav-link active" aria-current="page" href="http://localhost:8004/Home.html
">Home</a>
</form>

