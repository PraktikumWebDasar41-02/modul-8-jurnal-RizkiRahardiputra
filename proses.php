<?php
session_start();
require_once("koneksi.php");
 
$namadepan=$_POST['namadepan'];
$_SESSION['namadepan']=$namadepan;

$namabelakang=$_POST['namabelakang'];
$_SESSION['namabelakang']=$namabelakang;

$nim=$_POST['nim'];
$_SESSION['nim']=$nim;

$kelas=$_POST['kelas'];
$_SESSION['kelas']=$kelas;

$hobi=$_POST['hobi'];
$_SESSION['hobi']=$hobi;

$genre=$_POST['genre'];
$_SESSION['genre']=$genre;

$wisata=$_POST['wisata'];
$_SESSION['wisata']=$wisata;

$tanggallahir=$_POST['tanggallahir'];
$_SESSION['tanggallahir']=$tanggallahir;


$sql="INSERT INTO data (namadepan,namabelakang,nim,kelas,hobi,genre,wisata,tanggallahir) values ('$namadepan','$namabelakang','$nim','$kelas','$hobi','$genre','$wisata','$tanggallahir')";

if(mysqli_query($conn,$sql)){
 echo "Selamat anda Terhubung";
}else{
	echo"Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

?>

<a href="dashboard.php">Klik untuk melanjutkan</a>
