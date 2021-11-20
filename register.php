<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
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
        header("Location: index.php");
    }
    
    if (isset($_POST['submit-register'])) {
        $name = $_POST['nama_user'];
        $username = $_POST['username_user'];
        $email = $_POST['email_user'];
        $password = md5($_POST['password_user']);
        $cpassword = md5($_POST['cpassword']);
    
        if ($password == $cpassword) {
            $sql = "SELECT * FROM tb_user WHERE username_user ='$username'";
            $result = mysqli_query($con, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO tb_user (nama_user, username_user, email_user, password_user)
                        VALUES ('$name', '$username', '$email', '$password')";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                    $name = "";
                    $username = "";
                    $email = "";
                    $_POST['password_user'] = "";
                    $_POST['cpassword'] = "";
                } else {
                    echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
                }
            } else {
                echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
            }
        } else {
            echo "<script>alert('Password Tidak Sesuai')</script>";
        }
    }
?>

    <div class="registration-form">
        <form  action="register.php" method="POST">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="nama_user" id="nama_user" placeholder="Nama">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="username_user" id="username_user" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="email" class="form-control item" name="email_user" id="email_user" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="password_user" id="password_user" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="cpassword" id="cpassword" placeholder="Re-Password">
            </div>
            <div class="form-group">
                <button type="submit" name="submit-register" class="btn btn-block create-account">Buat Akun</button>
            </div>
            <div>
                <center><p>Sudah punya akun? &nbsp; <a href="login.php">Login</a></p></center>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
