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

//Menampilkan Pertanyaan
$select = "SELECT * FROM tb_pertanyaan";
$run = mysqli_query($con, $select);


//Kirim Pertanyaan
if (isset($_POST['kirim'])) {
  $kirimPertanyaan = $_POST['pertanyaan'];

  $insert = "INSERT INTO tb_pertanyaan(pertanyaan) VALUES('$kirimPertanyaan')";

  $run_insert = mysqli_query($con, $insert);

  header("Refresh:0");
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
  header("Location: index.php");
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
  header("Location: index.php");
  die();
}