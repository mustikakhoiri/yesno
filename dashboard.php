<!DOCTYPE html>
<html class="no-js h-100" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>
    True or False
  </title>
  <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components." />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css" />
  <link rel="stylesheet" href="styles/extras.1.1.0.min.css" />
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body class="h-100">

  <?php

  include('config.php');

  //session
  session_start();
  if (!isset($_SESSION["username_user"])) header("Location: login.php");
  // if($_SESSION['login'] == false) {
  //   header('location : login.php');
  // }

  $tampilUser = mysqli_query($con, "SELECT * FROM tb_user WHERE username_user='$_SESSION[username_user]'");
  $usr    = mysqli_fetch_array($tampilUser);
  $user_id = $usr['id_user'];

  ?>

  <div class="container-fluid">
    <div class="row">

      <!-- Main Sidebar -->
      <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <div class="main-navbar">
          <nav class="
                navbar
                align-items-stretch
                navbar-light
                bg-white
                flex-md-nowrap
                border-bottom
                p-0
              ">
            <a class="navbar-brand w-100 mr-0" href="dashboard.php" style="line-height: 25px">
              <div class="d-table m-auto">
                <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px" src="images/shards-dashboards-logo.svg" alt="True or False" />
                <span class="d-none d-md-inline ml-1">True or False</span>
              </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
              <i class="material-icons">&#xE5C4;</i>
            </a>
          </nav>
        </div>
        <form action="#" class="
              main-sidebar__search
              w-100
              border-right
              d-sm-flex d-md-none d-lg-none
            ">
          <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-search"></i>
              </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search" />
          </div>
        </form>
        <div class="nav-wrapper">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">
                <i class="material-icons">edit</i>
                <span>Beranda</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user_profile.php">
                <i class="material-icons">person</i>
                <span>User Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="components-blog-posts.php">
                <i class="material-icons">vertical_split</i>
                <span>Blog Posts</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add-new-post.php">
                <i class="material-icons">note_add</i>
                <span>Add New Post</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form-components.php">
                <i class="material-icons">view_module</i>
                <span>Forms &amp; Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tables.php">
                <i class="material-icons">table_chart</i>
                <span>Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="errors.php">
                <i class="material-icons">error</i>
                <span>Errors</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <!-- End Main Sidebar -->

      <main class="
            main-content
            col-lg-10 col-md-9 col-sm-12
            p-0
            offset-lg-2 offset-md-3
          ">
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
                <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search" />
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
                    <i class="material-icons">&#xE7FD;</i> Profil</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-danger" href="logout.php">
                    <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                </div>
              </li>
            </ul>
            <nav class="nav">
              <a href="#" class="
                    nav-link nav-link-icon
                    toggle-sidebar
                    d-md-inline d-lg-none
                    text-center
                    border-left
                  " data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
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
              <span class="text-uppercase page-subtitle">Dashboard</span>
              <h3 class="page-title">TRUE OR FALSE</h3>
            </div>
          </div>
          <!-- End Page Header -->

          <!-- New Draft Component -->
          <!-- <div class="col mb-4"> -->
          <!-- Quick Post -->
          <div class="card card-small h-100 mb-4">
            <div class="card-header border-bottom">
              <h4 class="m-0">Pertanyaan Baru</h4>
            </div>
            <div class="card-body d-flex flex-column">
              <form class="quick-post-form" method="post">
                <div class="form-group">
                  <input type="hidden" value="<?php echo $usr['id_user'] ?>" name="id_user">
                  <textarea class="form-control" placeholder="Apa yg ingin anda tanyakan ?" name="pertanyaan"></textarea>
                  <label class="mt-3" for="nama_kategori">Kategori</label>
                  <select name="id_kategori" id="id_kategori" class="form-control" data-placeholder="Pilih kategori" required>
                    <option value="" selected disabled>Pilih Kategori</option>
                    <?php
                    $data = mysqli_query($con, "SELECT * FROM tb_kategori");
                    while ($data_kategori = mysqli_fetch_assoc($data)) {
                      $id_kategori = $data_kategori['id_kategori'];
                      $nama_kategori = $data_kategori['nama_kategori'];
                    ?>
                      <option value="<?= $id_kategori ?>"><?= $nama_kategori ?></option>
                    <?php } ?>
                  </select>
                </div>
                <button type="submit" class="btn btn-accent" name="kirim">Ajukan Pertanyaan</button>
              </form>
            </div>
          </div>

          <!-- End Quick Post -->
          <!-- </div> -->
          <!-- End New Draft Component -->




          <div class="row">
            <!-- Discussions Component -->
            <div class="col mb-4">
              <div class="card card-small blog-comments mb-4">
                <div class="card-header border-bottom">
                  <h4 class="m-0">Lihat Pertanyaan Berdasarkan Kategori</h4>
                </div>
                <div class="card-body d-flex flex-column">
                  <form class="quick-post-form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
                    <div class="form-group mt-3">
                      <!-- <input type="hidden" value="<?php echo $usr['id_user'] ?>" name="id_user"> -->
                      <select name="nama_kategori" id="nama_kategori" class="form-control" data-placeholder="Pilih kategori" required>
                        <option value="" selected disabled>Pilih Kategori</option>
                        <?php
                        $data = mysqli_query($con, "SELECT * FROM tb_kategori");
                        while ($data_kategori = mysqli_fetch_assoc($data)) {
                          $id_kategori = $data_kategori['id_kategori'];
                          $nama_kategori = $data_kategori['nama_kategori'];
                        ?>
                          <option value="<?= $nama_kategori ?>"><?= $nama_kategori ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-accent">Lihat Kategori</button>
                  </form>
                </div>
              </div>
              <div class="card card-small blog-comments">
                <div class="card-header border-bottom">
                  <h4 class="m-0">Pertanyaan Tersedia</h4>
                </div>

                <?php foreach ($tampil_pertanyaan as $tmplPert) : ?>

                  <div class="card-body p-0">
                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__content">

                        <p class="m-0 my-1 mb-2">
                          <?php echo $tmplPert['pertanyaan']; ?>
                        </p>

                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                            <a <?php
                                if (userMembenarkan($tmplPert['id_pertanyaan'])) : ?> class="btn btn-white benar-btn disabled" <?php else : ?> class="btn btn-white benar-btn" href="?jwb=<?= $tmplPert['id_pertanyaan'] ?>&stat=benar&user_id=<?= $usr['id_user'] ?>" name="jwb_btn" <?php endif ?> data-id="<?php echo $tmplPert['id_pertanyaan'] ?>">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span>
                              Benar
                            </a>
                            <a <?php
                                if (userMenyalahkan($tmplPert['id_pertanyaan'])) : ?> class="btn btn-white salah-btn disabled" <?php else : ?> class="btn btn-white salah-btn" href="?jwb=<?= $tmplPert['id_pertanyaan'] ?>&stat=salah&user_id=<?= $usr['id_user'] ?>" name="jwb_btn" <?php endif ?> data-id="<?php echo $tmplPert['id_pertanyaan'] ?>">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span>
                              Salah
                            </a>
                          </div>
                        </div>

                        <span class="benar"><?php echo getBenar($tmplPert['id_pertanyaan']); ?> orang menjawab benar</span><br>
                        <span class="salah"><?php echo getSalah($tmplPert['id_pertanyaan']); ?> orang menjawab salah</span>
                      </div>
                    </div>
                  </div>

                <?php endforeach ?>

                <div class="card-footer border-top">
                  <div class="row">
                    <div class="col text-center view-report">
                      <button type="submit" class="btn btn-white">
                        Lihat semua pertanyaan
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Discussions Component -->

            <!-- Discussions Component -->
            <div class="col mb-4">
              <div class="card card-small blog-comments">
                <div class="card-header border-bottom">
                  <h4 class="m-0">Pertanyaan Kadaluarsa</h4>
                </div>

                <?php

                while ($row_pertanyaanK = mysqli_fetch_array($runK)) {;
                  $id_pertanyaanK = $row_pertanyaanK['id_pertanyaan'];
                  $pertanyaanK = $row_pertanyaanK['pertanyaan'];
                  $jwb_iyaK = $row_pertanyaanK['jwb_iya'];
                  $jwb_tidakK = $row_pertanyaanK['jwb_tidak'];
                ?>

                  <div class="card-body p-0">
                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__content">

                        <p class="m-0 my-1 mb-2">
                          <?php echo $pertanyaanK; ?>
                        </p>

                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                            <a type="button" class="btn btn-white disabled" href="?jwb_iya=<?php echo $id_pertanyaan ?>" name="jwb_yes">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span>
                              Benar
                            </a>
                            <a type="button" class="btn btn-white disabled" href="?jwb_tidak=<?php echo $id_pertanyaan ?>" name="jwb_no">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span>
                              Salah
                            </a>
                          </div>
                        </div>

                        <span class="text-muted"><?php echo $jwb_iyaK; ?> orang menjawab benar</span><br>
                        <span class="text-muted"><?php echo $jwb_tidakK; ?> orang menjawab salah</span>
                      </div>
                    </div>
                  </div>

                <?php } ?>

                <div class="card-footer border-top">
                  <div class="row">
                    <div class="col text-center view-report">
                      <button type="submit" class="btn btn-white">
                        Lihat semua pertanyaan
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card card-small blog-comments mt-4">
                <div class="card-header border-bottom">
                  <h4 class="m-0">Pertanyaan Berdasarkan Kategori</h4>
                </div>

                <?php
                //  $selectKtg = "SELECT nama_kategori, pertanyaan, jwb_iya, jwb_tidak FROM tb_kategori, tb_pertanyaan WHERE tb_kategori.id_kategori = tb_pertanyaan.id_kategori AND tb_kategori.nama_kategori = nama_kategori ORDER BY nama_kategori;";
                //  $runKtg = mysqli_query($con, $selectKtg);

                if (isset($_GET['nama_kategori'])) {
                  // $id_kategori = $_POST['id_kategori'];
                  $nama_kategori = $_GET['nama_kategori'];
                  // $id_pertanyaan = $_GET['id_pertanyaan'];
                  // $pertanyaan = $_GET['pertanyaan'];
                  $lihat = "SELECT tb_pertanyaan.id_pertanyaan, tb_pertanyaan.pertanyaan,tb_pertanyaan.jwb_iya, tb_pertanyaan.jwb_tidak, tb_kategori.id_kategori, tb_kategori.nama_kategori FROM tb_pertanyaan, tb_kategori WHERE tb_pertanyaan.id_kategori = tb_kategori.id_kategori AND tb_kategori.nama_kategori = '$nama_kategori' ORDER BY tb_pertanyaan.id_pertanyaan DESC";
                  $runKtg = mysqli_query($con, $lihat);
                  if (!$runKtg) {
                    printf("Error: %s\n", mysqli_error($con));
                    exit();
                  }

                  while ($row_pertanyaanKtg = mysqli_fetch_array($runKtg)) {
                    $id_pertanyaanKtg = $row_pertanyaanKtg['id_pertanyaan'];
                    $pertanyaanKtg = $row_pertanyaanKtg['pertanyaan'];
                    $kategoriKtg = $row_pertanyaanKtg['nama_kategori'];
                    $jwb_iyaKtg = $row_pertanyaanKtg['jwb_iya'];
                    $jwb_tidakKtg = $row_pertanyaanKtg['jwb_tidak']; ?>
                    <div class="card-body p-0">
                      <div class="blog-comments__item d-flex p-3">
                        <div class="blog-comments__content">

                          <h5>Kategori: <?= $kategoriKtg; ?></h5>
                          <p class="m-0 my-1 mb-2">
                            <?php echo $pertanyaanKtg; ?>
                          </p>

                          <!-- <div class="blog-comments__actions">
                            <div class="btn-group btn-group-sm">
                              <a type="button" class="btn btn-white disabled" href="?jwb_iya=<?php echo $id_pertanyaan ?>" name="jwb_yes">
                                <span class="text-success">
                                  <i class="material-icons">check</i>
                                </span>
                                Benar
                              </a>
                              <a type="button" class="btn btn-white disabled" href="?jwb_tidak=<?php echo $id_pertanyaan ?>" name="jwb_no">
                                <span class="text-danger">
                                  <i class="material-icons">clear</i>
                                </span>
                                Salah
                              </a>
                            </div>
                          </div> -->

                          <!-- <span class="text-muted"><?php echo $jwb_iya; ?> orang menjawab benar</span><br>
                        <span class="text-muted"><?php echo $jwb_tidak; ?> orang menjawab salah</span> -->
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                <?php } ?>

                <div class="card-footer border-top">
                  <div class="row">
                    <div class="col text-center view-report">
                      <button type="submit" class="btn btn-white">
                        Lihat semua pertanyaan
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Discussions Component -->

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
  <div class="promo-popup animated">
    <a href="dashboard.php" class="pp-cta extra-action">
      <img width="150px" src="images/instruktur.svg"> </a>
    <div class="pp-intro-bar"> Ingin tahu fakta menarik?
      <span class="close">
        <i class="material-icons">close</i>
      </span>
      <span class="up">
        <i class="material-icons">keyboard_arrow_up</i>
      </span>
    </div>
    <div class="pp-inner-content">
      <h2>True or False</h2>
      <p>Ajukan pertanyaan untuk mendapatkan jawaban fakta di baliknya!
        <br> Atau jawab pertanyaan hanya dengan 1 kali klik!
      </p>
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
  <script src="scripts/app/app-blog-overview.1.1.0.js"></script>
</body>

</html>