<?php

include('config.php');

session_start();
if (!isset($_SESSION["username_user"])) header("Location: login.php");

$tampilUser = mysqli_query($con, "SELECT * FROM tb_user WHERE username_user='$_SESSION[username_user]'");
$usr    = mysqli_fetch_array($tampilUser);
$aidi_user = $usr['id_user'];

?>

<!doctype html>
<html class="no-js h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>True or False</title>
  <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
  <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body class="h-100">
  <div class="container-fluid">
    <div class="row">
      <!-- Main Sidebar -->
      <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <div class="main-navbar">
          <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="dashboard.php" style="line-height: 25px;">
              <div class="d-table m-auto">
                <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                <span class="d-none d-md-inline ml-1">Shards Dashboard</span>
              </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
              <i class="material-icons">&#xE5C4;</i>
            </a>
          </nav>
        </div>
        <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
          <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-search"></i>
              </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
          </div>
        </form>
        <div class="nav-wrapper">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="dashboard.php">
                <i class="material-icons">edit</i>
                <span>Branda</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="user_profile.php">
                <i class="material-icons">person</i>
                <span>User Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="components-blog-posts.html">
                <i class="material-icons">vertical_split</i>
                <span>Blog Posts</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="add-new-post.html">
                <i class="material-icons">note_add</i>
                <span>Add New Post</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="form-components.html">
                <i class="material-icons">view_module</i>
                <span>Forms &amp; Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="tables.html">
                <i class="material-icons">table_chart</i>
                <span>Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="errors.html">
                <i class="material-icons">error</i>
                <span>Errors</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <!-- End Main Sidebar -->
      <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
        <div class="main-navbar sticky-top bg-white">
          <!-- Main Navbar -->
          <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
            <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
              <div class="input-group input-group-seamless ml-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-search"></i>
                  </div>
                </div>
                <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
              </div>
            </form>
            <ul class="navbar-nav border-left flex-row ">
              <li class="nav-item border-right dropdown notifications">
                <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="nav-link-icon__wrapper">
                    <i class="material-icons">&#xE7F4;</i>
                    <span class="badge badge-pill badge-danger">2</span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">
                    <div class="notification__icon-wrapper">
                      <div class="notification__icon">
                        <i class="material-icons">&#xE6E1;</i>
                      </div>
                    </div>
                    <div class="notification__content">
                      <span class="notification__category">Analytics</span>
                      <p>Your website’s active users count increased by
                        <span class="text-success text-semibold">28%</span> in the last week. Great job!
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item" href="#">
                    <div class="notification__icon-wrapper">
                      <div class="notification__icon">
                        <i class="material-icons">&#xE8D1;</i>
                      </div>
                    </div>
                    <div class="notification__content">
                      <span class="notification__category">Sales</span>
                      <p>Last week your store’s sales count decreased by
                        <span class="text-danger text-semibold">5.52%</span>. It could have been worse!
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <img class="user-avatar rounded-circle mr-2" src="images/avatars/0.jpg" alt="User Avatar">
                  <span class="d-none d-md-inline-block"><?= $usr['nama_user'] ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-small">
                  <a class="dropdown-item" href="user_profile.php">
                    <i class="material-icons">&#xE7FD;</i> Profile</a>
                  <a class="dropdown-item text-danger" href="logout.php">
                    <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                </div>
              </li>
            </ul>
            <nav class="nav">
              <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                <i class="material-icons">&#xE5D2;</i>
              </a>
            </nav>
          </nav>
        </div>
        <!-- / .main-navbar -->
        <div class="main-content-container container-fluid px-4">
          <!-- Page Header -->
          <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
              <span class="text-uppercase page-subtitle">Edit Profile</span>
              <h3 class="page-title">Detail Akun</h3>
            </div>
          </div>
          <!-- End Page Header -->

          <!-- Default Light Table -->
          <div class="row">
            <div class="col">
              <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                  <h6 class="m-0">Data akun</h6>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item p-3">
                    <div class="row">
                      <div class="col">
                        <form method="POST">
                          <div class="form-row">
                            <input type="hidden" value="<?= $aidi_user ?>" name="id_user">
                            <div class="form-group col-md-6">
                              <label for="feFirstName">Nama</label>
                              <input type="text" class="form-control" placeholder="First Name" value="<?= $usr['nama_user'] ?>" name="nama_user">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="feLastName">Username</label>
                              <input type="text" class="form-control" placeholder="Last Name" value="<?= $usr['username_user'] ?>" name="username_user">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="feEmailAddress">Email</label>
                            <input type="email" class="form-control" id="feEmailAddress" placeholder="Email" value="<?= $usr['email_user'] ?>" name="email_user" disabled>
                          </div>
                          <button type="submit" class="btn btn-accent" name="kirimUpdate">Update data akun</button>
                        </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col">
              <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                  <h6 class="m-0">Ubah Kata Sandi</h6>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item p-3">
                    <div class="row">
                      <div class="col">
                        <form action="edit_profile.php" method="POST">
                          <div class="form-row">
                            <input type="hidden" value="<?= $aidi_user ?>" name="id_user">
                            <div class="form-group col-md-12">
                              <label for="current_password">Kata Sandi Sebelumnya</label>
                              <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Kata Sandi Sebelumnya">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="new_password">Kata Sandi Baru</label>
                              <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Kata Sandi Baru">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="confirm_new_password">Konfirmasi Kata Sandi Baru</label>
                              <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" placeholder="Konfirmasi Kata Sandi Baru">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-accent" name="updatePassword">Ubah Kata Sandi</button>
                        </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End Default Light Table -->
        </div>

        <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
          </ul>
          <span class="copyright ml-auto my-auto mr-2">Copyright © 2018
            <a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
          </span>
        </footer>
      </main>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
  <script src="scripts/extras.1.1.0.min.js"></script>
  <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
</body>

</html>