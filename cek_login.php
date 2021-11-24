<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username_user'];
$password = md5($_POST['password_user']);


// if(!empty($username) and !empty($password)) {
// 	$sql = mysqli_query($con, "SELECT * FROM tb_user WHERE username_user='$username' AND password_user='$password'");
// 	$row = mysqli_fetch_array($sql); 

// 	$valid_id = $row['id_user'];
// 	$valid_username = $row['username_user'];
// 	$valid_password = $row['password_user']; 

// 	if($username == $valid_username and $password == $valid_password )
// 	{
// 		$_SESSION['login'] = true;
// 		$_SESSION['id_user'] = $valid_id;
// 		$_SESSION['username_user'] = $valid_username;

// 		header('location: dashboard.php');
// 	} else {
// 		echo '<script>alert("Username dan Password Salah")</script>';

// 		header('location:login.php');
// 	}
// } else {
// 	echo '<script>alert("Username dan Password Harus Di Isi")</script>';
// 	header('location:login.php');
// }

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