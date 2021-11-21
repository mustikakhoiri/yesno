<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>True or False</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    require_once("config.php");
    error_reporting(0);

    session_start();

    if (isset($_SESSION['username_user'])) {
        header("Location: dashboard.php");
    }

    if (isset($_POST['submit-register'])) {
        $name = $_POST['nama_user'];
        $username = $_POST['username_user'];
        $email = $_POST['email_user'];
        $password = md5($_POST['password_user']);
        $cpassword = md5($_POST['cpassword']);

        if ($password == $cpassword) {
            $sql = "SELECT * FROM tb_user WHERE username_user ='$username' OR email_user='$email'";
            $result = mysqli_query($con, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO tb_user (nama_user, username_user, email_user, password_user)
                        VALUES ('$name', '$username', '$email', '$password')";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    $name = "";
                    $username = "";
                    $email = "";
                    $_POST['password_user'] = "";
                    $_POST['cpassword'] = "";
                    
                    echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <i class="fa fa-check mx-2"></i>
                        <strong>Sukses!</strong> Registrasi Berhasil! </div>
                    <div class="main-content-container container-fluid px-4">';

                    //header('location:login.php');
                } else {
                    echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
                }
            } else {
                echo "<script>alert('Woops! Email dan Username Sudah Terdaftar.')</script>";
            }
        } else {
            echo "<script>alert('Password Tidak Sesuai')</script>";
        }
    }
    ?>


    <main class="site-main mt-lg-3 mb-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="col-sm-12 text-center mb-3">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/instruktur.svg" width="100" alt="logo"></a>
                    </div>
                    <div class="card row card-signin flex-row px-3">
                        <div class="card-body col-md-6">
                            <h5 class="card-title text-center">Daftar Akun</h5>
                            <form class="form-signin" action="register.php" method="POST">
                                <div class="form-icon">
                                    <span><i class="icon icon-user"></i></span>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" id="nama_user" name="nama_user" class="form-control" placeholder="Masukkan Nama Lengkap" autofocus required pattern="[a-zA-Z]{1,}" title="Nama harus berupa huruf"> 
                                    <label for="nama_user">Nama Lengkap</label>
                                    <small class="form-text text-muted">* Nama harus berupa Huruf.</small>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" id="username_user" name="username_user" class="form-control" placeholder="Masukkan Username" autofocus required pattern=".[a-zA-Z]+[0-9]{1,}" title="Username harus berupa huruf dan angka, ex. dyta1234"> 
                                    <label for="username_user">Username</label>
                                    <small class="form-text text-muted">* Username harus berupa kombinasi dari Huruf dan Huruf.</small>
                                </div>
                                <div class="form-label-group">
                                    <input type="email" id="email_user" name="email_user" class="form-control" placeholder="Masukkan Email" autofocus required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" title="Perhatikan penulisan email, ex. dyta67@ymail.com">
                                    <label for="email_user">Email</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="password" id="password_user" name="password_user" class="form-control" placeholder="Masukkan Kata Sandi" autofocus required minlength="6">
                                    <label for="password_user">Kata Sandi</label>
                                    <small class="form-text text-muted">* Kata Sandi minimal terdiri dari 6 karakter.</small>
                                </div>
                                <div class="form-label-group">
                                    <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Masukkan Ulang Kata Sandi" autofocus required minlength="6">
                                    <label for="cpassword">Ulang Kata Sandi</label>
                                    <small class="form-text text-muted">* Kata Sandi minimal terdiri dari 6 karakter.</small>
                                </div>
                                <div class="form-label-group">
                                    <button type="submit" name="submit-register" class="btn btn-lg btn-primary btn-block text-uppercase">Buat Akun</button>
                                </div>
                                <div class="text-center">
                                    <p>Sudah punya akun? <a href="login.php">Masuk</a></p>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 d-none d-md-flex">
                            <img src="images/instruktur.svg" class="card-img" alt="gambar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    
</body>

</html>