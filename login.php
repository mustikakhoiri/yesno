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
        header("Location:dashboard.php");
    }

    if (isset($_POST['submit-login'])) {
        $username = $_POST['username_user'];
        $password = md5($_POST['password_user']);

        $query = "SELECT * FROM tb_user WHERE username_user='$username' OR email_user='$username' AND password_user='$password'";
        $result = mysqli_query($con, $query);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username_user'] = $row['username_user'];
            header("Location: dashboard.php");
        } else {
            // $this->session->set_flashdata('error_msg', 'Username atau password Anda salah. Silahkan coba lagi!');
            echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }
    ?>


    <main class="site-main mt-lg-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="col-sm-12 text-center mb-3">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/instruktur.svg" width="100" alt="logo"></a>
                    </div>
                    <div class="card row card-signin flex-row px-3">
                        <div class="col-md-6 d-none d-md-flex">
                            <img src="images/instruktur.svg" class="card-img" alt="gambar">
                        </div>
                        <div class="card-body col-md-6">
                            <h5 class="card-title text-center">Masuk Akun</h5>
                            <form class="form-signin" action="login.php" method="POST">
                                <div class="form-icon">
                                    <span><i class="icon icon-user"></i></span>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" id="username_user" name="username_user" class="form-control" placeholder="Masukkan Username" autofocus required title="Username tidak boleh kosong">
                                    <label for="username_user">Username</label>
                                </div>
                                <div class="form-label-group"><input type="password" id="password_user" name="password_user" class="form-control" placeholder="Masukkan Kata Sandi" autofocus required title="Password harus diisi">
                                    <label for="password_user">Kata Sandi</label>
                                </div>
                                <div class="form-label-group">
                                    <button type="submit" name="submit-login" class="btn btn-lg btn-primary btn-block text-uppercase">Masuk</button>
                                </div>
                                <div class="text-center">
                                    <p>Belum punya akun? <a href="register.php">Daftar</a></p>
                                </div>
                            </form>
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