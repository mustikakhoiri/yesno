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
        header("Location:index.php");
    }
    
    if (isset($_POST['submit-login'])) {
        $username = $_POST['username_user'];
        $password = md5($_POST['password_user']);
    
        $query = "SELECT * FROM tb_user WHERE username_user='$username' OR email_user='$username' AND password_user='$password'";
        $result = mysqli_query($con, $query);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username_user'] = $row['username_user'];
            header("Location: index.php");
        } else {
            echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }
?>


    <div class="registration-form">
        <form action="login.php" method="POST">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="username_user" id="username_user" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="password_user" id="password_user" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" name="submit-login" class="btn btn-block create-account">Login</button>
            </div>
             <div>
                <center><p>Belum punya akun? &nbsp; <a href="register.php">Register</a></p></center>
            </div>
        </form>
        
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>


