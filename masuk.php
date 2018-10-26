<?php
require_once("koneksi.php");

 
$username=$_POST['username'];
$password=$_POST['password'];
$password=md5('password');

$sql="INSERT INTO login (username,password) values ('$username','$password')";

if(mysqli_query($conn,$sql)){
 echo "connect";
}

else{
	echo"Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

?>

<a href="dashboard.php"> Klik disini untuk lanjutkan </a>