<?php

// $db_host = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "truefalse";

// try
// {    
//     //create PDO connection 
//     $con = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
// } catch(PDOException $e) {
//     //show error
//     die("Terjadi masalah: " . $e->getMessage());
$host = "localhost";
$username = "root";
$password = "";
$db = "truefalse";

$con = mysqli_connect($host, $username, $password, $db) or die();

//Menampilkan Pertanyaan Tersedia
$select = "SELECT * FROM tb_pertanyaan WHERE tersedia = 'TRUE' ORDER BY id_pertanyaan DESC";
$run = mysqli_query($con, $select);

//Menampilkan Pertanyaan Kadaluarsa
$selectK = "SELECT * FROM tb_pertanyaan WHERE tersedia = 'False' ORDER BY id_pertanyaan DESC";
$runK = mysqli_query($con, $selectK);

//Menampilkan Pertanyaan Berdasarkan Kategori
$selectKtg = "SELECT * FROM tb_pertanyaan WHERE nama_kategori = 'Bisnis' ORDER BY id_pertanyaan DESC";
$runKtg = mysqli_query($con, $selectKtg);


//Kirim Pertanyaan
if (isset($_POST['kirim'])) {
  $kirimId         = $_POST['id_user'];
  $kirimPertanyaan = $_POST['pertanyaan'];
  $kirimKategori   = $_POST['nama_kategori'];

  $insert = "INSERT INTO tb_pertanyaan(id_user, pertanyaan, nama_kategori) VALUES('$kirimId', '$kirimPertanyaan', '$kirimKategori')";

  $run_insert = mysqli_query($con, $insert);

  header("Refresh:0");
}

//Update data profil
if (isset($_POST['kirimUpdate'])) {
  $update_id    = $_POST['id_user'];
  $update_nama  = $_POST['nama_user'];
  $update_email = $_POST['email_user'];

  $update_user = "UPDATE `tb_user`
                  SET `nama_user` = '$update_nama',
                      `email_user` = '$update_email'
                  WHERE `tb_user`.`id_user` = $update_id;
  ";

  $run_update_user = mysqli_query($con, $update_user);

  header("Location: user_profile.php");
}


//Kirim Jawaban
//Jawaban iya
if (isset($_GET['jwb_iya'])) {
  $edit_id = $_GET['jwb_iya'];

  $select = "SELECT * FROM tb_pertanyaan WHERE id_pertanyaan='$edit_id'";
  $run = mysqli_query($con, $select);
  $row_pertanyaan = mysqli_fetch_array($run);
  $pertanyaan = $row_pertanyaan['pertanyaan'];
  $jwb_iya = $row_pertanyaan['jwb_iya'];

  $update = "UPDATE tb_pertanyaan SET jwb_iya=jwb_iya +1 WHERE id_pertanyaan = '$edit_id'";

  $run_update = mysqli_query($con, $update);
  header("Location: dashboard.php");
  die();
}

//Jawaban Tidak
if (isset($_GET['jwb_tidak'])) {
  $edit_id = $_GET['jwb_tidak'];

  $select = "SELECT * FROM tb_pertanyaan WHERE id_pertanyaan='$edit_id'";
  $run = mysqli_query($con, $select);
  $row_pertanyaan = mysqli_fetch_array($run);
  $pertanyaan = $row_pertanyaan['pertanyaan'];
  $jwb_tidak = $row_pertanyaan['jwb_tidak'];

  $update = "UPDATE tb_pertanyaan SET jwb_tidak=jwb_tidak +1 WHERE id_pertanyaan = '$edit_id'";

  $run_update = mysqli_query($con, $update);
  header("Location: dashboard.php");
  die();
}
