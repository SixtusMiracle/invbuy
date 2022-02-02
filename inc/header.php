<?php

    // Site global things
    include_once 'global.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <!-- title of our page -->
    <title>invBuy | <?php echo getPageTitle($filename); ?></title>

    <!-- responsive -->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

    <!-- include favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!-- include fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="vendor/bootstrap.css" />
    <link rel="stylesheet" href="vendor/fontawesome.css" />

    <!-- css styles for home page -->
    <link href="assets/css/global.css" rel="stylesheet" />
    <link href="assets/css/<?php echo $filename ?>.css?v=<?php echo time(); ?>" rel="stylesheet" />

  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">

      <div class="pc-only">
          <div class="container">
            <a class="navbar-brand" href="index.php">inv<span>Buy</span> </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

              <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="home.php#packages" class="nav-link">Packages</a>
                </li>
                <li class="nav-item">
                  <a href="home.php#about" class="nav-link">About</a>
                </li>
                <!-- <li class="nav-item">
                  <a href="home.php#footer" class="nav-link">Contact</a>
                </li> -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="login.php"><i class="far fa-user-circle"></i> Log In</a>
                    <a class="dropdown-item" href="signup.php"><i class="fal fa-user-plus"></i> Sign Up</a>
                  </div>
                </li>
              </ul>
            </div>

          </div>
      </div>
      <div class="mobile-only">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">inv<span>Buy</span> </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

              <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="home.php#packages" class="nav-link">Packages</a>
                </li>
                <li class="nav-item">
                  <a href="home.php#about" class="nav-link">About</a>
                </li>
                <!-- <li class="nav-item">
                  <a href="home.php#footer" class="nav-link">Contact</a>
                </li> -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="login.php"><i class="far fa-user-circle"></i> Log In</a>
                    <a class="dropdown-item" href="signup.php"><i class="fal fa-user-plus"></i> Sign Up</a>
                  </div>
                </li>
              </ul>
            </div>

          </div>
      </div>
    </nav>

      <!-- Categories Navbar still to come -->
      