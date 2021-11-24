<?php

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
$selectKtg = "SELECT nama_kategori, pertanyaan, jwb_iya, jwb_tidak FROM tb_kategori, tb_pertanyaan WHERE tb_pertanyaan.id_kategori = tb_kategori.id_kategori;";
$runKtg = mysqli_query($con, $selectKtg);


//Kirim Pertanyaan
if (isset($_POST['kirim'])) {
  $kirimId         = $_POST['id_user'];
  $kirimKategori   = $_POST['id_kategori'];
  $kirimPertanyaan = $_POST['pertanyaan'];

  $insert = "INSERT INTO tb_pertanyaan(id_user, id_kategori, pertanyaan) VALUES('$kirimId', '$kirimKategori', '$kirimPertanyaan')";

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
          echo '<script>alert("Password Berhasil di Ubah!")</script>';
        } else {
          //kondisi jika proses query gagal
          echo '<script>alert("Gagal Merubah Password")</script>';
        }
      } else {
        //kondisi jika password baru beda dengan konfirmasi password
        echo '<script>alert("Password Tidak Cocok")</script>';
      }
    } else {
      //kondisi jika password baru yang dimasukkan kurang dari 6 karakter
      echo '<script>alert("Minimal password baru adalah 6 karakter")</script>';
    }
  } else {
    //kondisi jika password lama tidak cocok dengan data yang ada di database
    echo '<script>alert("Gagal Merubah Password")</script>';
  }
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


//Nonaktifkan/aktifkan pertanyaan
if (isset($_GET['id_pert'])) {
  $id_pert = $_GET['id_pert'];
  $stat_pert = $_GET['stat'];

  if ($stat_pert == 'TRUE') {
    $ubah = "UPDATE tb_pertanyaan SET tersedia='FALSE'
               WHERE id_pertanyaan = '$id_pert'";
  } else {
    $ubah = "UPDATE tb_pertanyaan SET tersedia='TRUE'
              WHERE id_pertanyaan = '$id_pert'";
  }

  $upt_pert = mysqli_query($con, $ubah);
  header("Location:user_profile.php");
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


