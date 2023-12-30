<?php
 
 include "conn.php";
 

$username = $_POST['username'];
$password = $_POST['pwd'];


 
 $query1 = "INSERT INTO login VALUES('$username','$password')";
 
 
 if(mysqli_query($con,$query1))
 {
 echo "signup   successful  ";
 }
 else
 {
  echo "error;".mysqli_error($con);
  
  
 }
      
?>
<form>
 <a class="nav-link active" aria-current="page" href="http://localhost:8004/Login.html
">Home</a>
</form>
