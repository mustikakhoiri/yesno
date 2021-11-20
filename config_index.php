<?php
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
}

//Kirim Jawaban
if (isset($_GET['jwb_iya'])) {
    $jwb_id = $_GET['jwb_iya'];
}
