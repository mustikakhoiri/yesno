<?php
include('config.php');
if (!isset($_POST['submit'])) {
?>

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
                                <h5 style="margin-top: 20px; text-align: center;">RESET PASSWORD</h5>
                                <div class="card-body">
                                    <p class="mb-3 w-55 mx-auto">Masukkan password baru anda. Dimohon password baru tidak sama dengan password sebelumnya!</p>
                                    <form class="form-signin" action="login.php" method="post">
                                        <input type="hidden" value="<?= $aidi_user ?>" name="id_user">
                                        <input type="hidden" value="<?= $current_password ?>" name="current_password">
                                        <p class="text-left w-75 mx-auto"><small id="passwordHelp" class="text-muted">
                                                Masukkan password harus 6 - 32 karakter.
                                            </small></p>
                                        <div class="form-label-group">
                                            <input type="password" name="new_password" id="new_password" class="form-control" placeholder="New Password....." aria-describedy="passwordHelp" required pattern="(?=.*\d)(?=.*[a-z)(?=.*[A-z]).{6,32}" tittle="Password harus memiliki 1 hururf kapital, 1 huruf kecil dan 1 angka minimal 6 karakter dan maksimal 32 karakter">
                                            <label for="new_password">Password Baru</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" placeholder="Confirm Password.....    " aria-describedby="passwordHelp" required title="Masukkan Password yang sama persis dengan password yang anda masukkan diatas">
                                            <label for="confirm_new_password">Konfirmasi Password Baru</label>
                                        </div>

                                        <div class="mx-auto w-75"></div>
                                        <div class="form-label-group">
                                            <button type="submit" name="submit-reset" class="btn btn-lg btn-primary btn-block text-uppercase">Reset</button>
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
        </div>

        <div class="col-md-4"></div>
        </div>
        </div>
        </section>
        <script>
            //change the type of input to password or text
            function Toggle() {
                var pass = document.getElementById("typepass");
                var pass = document.getElementById("typepass2");
                if (pass.type == "password") {
                    pass.type = "text";
                }
                if (pass2.type == "password") {
                    pass2.type = "text";
                } else {
                    pass.type = "password";
                    pass2.type = "password";
                }
            }
        </script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    </body>

    </html>
<?php } ?>