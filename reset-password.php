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

    <main class="site-main mt-lg-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="col-sm-12 text-center mb-3">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/instruktur.svg" width="100" alt="logo"></a>
                    </div>
                    <div class="card row card-signin flex-row px-5">
                        <div class="card-body col-md-12 px-5">
                            <h5 class="card-title text-center">Reset Kata Sandi</h5>
                            <form class="form-signin" action="resetPassword.php" method="POST">
                                <div class="form-icon">
                                    <span><i class="icon icon-user"></i></span>
                                </div>
                                <div class="form-label-group">
                                    <h6>Masukkan Alamat Email untuk Memperbarui Kata Sandi Anda!</h6>
                                </div>
                                <div class="form-label-group">
                                    <input type="email" id="email_user" name="email_user" class="form-control" placeholder="Masukkan Email" autofocus required>
                                    <label for="email_user">Email</label>
                                </div>
                                <div class="form-label-group">
                                    <button type="submit" name="submit-resetpw" class="btn btn-lg btn-primary btn-block text-uppercase">Reset Kata Sandi</button>
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