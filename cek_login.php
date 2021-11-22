<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username_user'];
$password = md5($_POST['password_user']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($con,"SELECT * FROM tb_user WHERE username_user='$username' AND password_user='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username_user'] = $username;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
	header("location:login.php?pesan=gagal");
    echo "<script>alert('Login Berhasil')</script>";
}
?>