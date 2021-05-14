<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index/index.css">
    <link rel="stylesheet" href="css/register.css">

     <!-- Favicons -->
     <link rel="apple-touch-icon" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">

     <!-- Vendor CSS Files -->
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <title>Login</title>

</head>

<body>
    <!-- navbar -->
    <nav>
            <div class="brand">
                <!-- <img src="" alt=""> -->
                <h2>bharat<span>kumar</span></h2>
            </div>
            <div class="nav-items">
                <ul id="nav-item">
                    <li><a href="index.php" onclick="showMenu()">home</a></li>
                    <li><a href="about.php" onclick="showMenu()">about</a></li>
                    <li><a href="services.php" onclick="showMenu()">services</a></li>
                    <li><a href="contact.php" onclick="showMenu()">contact</a></li>
                    <li>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <input type="submit" name="logout" class="getstarted scrollto" value="Logout">
                        </form>
                    </li>
                </ul>
            </div>
            <div class="menu-btn">
                <img src="img/menu.png" data-src="img/close.png" alt="menu-btn" id="menu" onclick="showMenu()">
            </div>
    </nav>

    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs my-5">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        <h2>Dashboard</h2>
        </div>

    </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page my-5">
    <div class="container my-5">
        <p>
        Welcome : <?php if(isset($_SESSION["username"])) echo $_SESSION["username"]; ?>
        </p>
    </div>
    </section>

    </main><!-- End #main -->



    <!-- footer -->
    <?php include 'footer.php' ?>


    <!-- Vendor JS Files -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
</body>

<?php
  if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['logout'] = "Logout")
  {
    session_destroy(); 
    header("Location: login.php");
  }
  else if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['logout'] = "Login")
  {
    header("Location: login.php");
  }
?>
</html>

