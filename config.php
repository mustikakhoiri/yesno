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

//Update password
if (isset($_POST['updatePassword'])) {
  //membuat variabel untuk menyimpan data inputan yang di isikan di form
  $update_id = $_POST['id_user'];
  $current_password      = $_POST['current_password'];
  $new_password      = $_POST['new_password'];
  $confirm_new_password  = $_POST['confirm_new_password'];

  //cek dahulu ke database dengan query SELECT
  //kondisi adalah WHERE (dimana) kolom password adalah $current_password di encrypt m5
  //encrypt -> md5($current_password)
  $current_password  = md5($current_password);
  $cek       = $con->query("SELECT password_user FROM tb_user WHERE password_user='$current_password'");

  if ($cek->num_rows) {
    //kondisi ini jika password lama yang dimasukkan sama dengan yang ada di database
    //membuat kondisi minimal password adalah 5 karakter
    if (strlen($new_password) >= 6) {
      //jika password baru sudah 6 atau lebih, maka lanjut ke bawah
      //membuat kondisi jika password baru harus sama dengan konfirmasi password
      if ($new_password == $confirm_new_password) {
        //jika semua kondisi sudah benar, maka melakukan update kedatabase
        //query UPDATE SET password = encrypt md5 new_password
        //kondisi WHERE username = session username pada saat login, maka yang di ubah hanya user dengan username tersebut
        $new_password   = md5($new_password);

        $update = $con->query("UPDATE tb_user SET password_user='$new_password' WHERE id_user='$update_id'");
        if ($update) {
          //kondisi jika proses query UPDATE berhasil
          echo 'Password berhasil di ubah!';
        } else {
          //kondisi jika proses query gagal
          echo 'Gagal merubah password!';
        }
      } else {
        //kondisi jika password baru beda dengan konfirmasi password
        echo 'Konfirmasi password tidak cocok!';
      }
    } else {
      //kondisi jika password baru yang dimasukkan kurang dari 6 karakter
      echo 'Minimal password baru adalah 6 karakter!';
    }
  } else {
    //kondisi jika password lama tidak cocok dengan data yang ada di database
    echo 'Password lama tidak cocok!';
  }
}

//Update data profil
if (isset($_POST['kirimUpdate'])) {
  $update_id    = $_POST['id_user'];
  $update_nama  = $_POST['nama_user'];
  $update_username = $_POST['username_user'];

  $update_user = "UPDATE `tb_user`
                  SET `nama_user` = '$update_nama',
                      `username_user` = '$update_username'
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
