<?php
  include('config.php');
  if(!isset($_POST['submit'])){
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
                        <form action="login.php" method="post">
                        <p class="text-left w-75 mx-auto"><small id="passwordHelp" class="text-muted">
                             Masukkan password harus 8 - 32 karakter.
                         </small></p>
                            <input type="password" name="typepass" id="password_user" class="form-control mx-auto w-75" placeholder="New Password....." aria-describedy="passwordHelp" required pattern="(?=.*\d)(?=.*[a-z)(?=.*[A-z]).{8,32}" tittle="Password harus memiliki 1 hururf kapital, 1 huruf kecil dan 1 angka minimal 8 karakter dan maksimal 32 karakter">
                            <input type="password" class="form-control mx-auto w-75" id="cpassword_user" name="typepass2" placeholder="Confirm Password.....    " aria-describedby="passwordHelp" required title="Masukkan Password yang sama persis dengan password yang anda masukkan diatas">
                            
                            <div class="mx-auto w-75"></div>
                            <div class="form-label-group">
                                    <button type="submit" name="submit-resetpw" class="btn btn-lg btn-primary btn-block text-uppercase">Reset</button>
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
    function Toggle (){
       var pass = document.getElementById("typepass");
       var pass = document.getElementById("typepass2");
       if(pass.type == "password") {
           pass.type = "text";
       }
       if (pass2.type == "password") {
           pass2.type = "text";
       }
       else{
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