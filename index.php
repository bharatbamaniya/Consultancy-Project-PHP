<?php 
    $countVisit = 0;
    if(isset($_COOKIE['countVisit'])){
        $countVisit = $_COOKIE['countVisit'];
        $countVisit ++;
    }if(isset($_COOKIE['lastVisit'])){
        $lastVisit = $_COOKIE['lastVisit'];
    }
    setcookie('countVisit', $countVisit+1,  time()+3600);
    setcookie('lastVisit', date("d-m-Y H:i:s"),  time()+3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index/index.css">

     <!-- Favicons -->
    <link rel="apple-touch-icon" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <title>visa consultant</title>

    <style>
    .visit-count {
      display: block;
      position: absolute;
      z-index: 995;
      top:100px;
      right: 10px;
    }
  </style>  
</head>
<body>

   <?php
    require_once 'header.php';
   ?>

    <!-- header -->
    <header class="landing_header split">
           <div class="header-text">
                <h1>make future with us </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci placeat cum excepturi? Alias provident maxime amet eos repudiandae saepe, molestias natus eum mollitia, veritatis et in voluptate maiores quos illo?</p>
            </div>
            <div class="header-image">
                <img src="img/header-image.svg" alt="">
            </div>
    </header>

    <!-- visit count -->
    <div class="visit-count text-right">
        <?php
        // is the variable is not set, say 'welcome', otherwise show the info about visit number and last visit date
        if($countVisit == 0){
            echo "<div><span>Welcome</span></div>";
        } else {
            echo "<div class='text-center'><span>This is your visit number ".$countVisit."</div></span>";
            echo '<br>';
            echo "<div class='text-center'><span>Last time, you were here ".$lastVisit."</div></span>";
        }
        ?>
    </div>

    <section class="container">
        <div class="title">
            <h2>Our <span>T</span>op Services</h2>
        </div>
        <div class="content">
            
                <div class="card">
                    <img src="icons/tourist.png" alt="tourist-visa">
                    <h3>Tourist Visa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga culpa nihil totam animi ex placeat autem obcaecati velit incidunt, eligendi ea nulla facere. Praesentium adipisci, ratione ullam commodi excepturi similique.</p>
                </div>
           
                <div class="card">
                    <img src="icons/tourist.png" alt="tourist-visa">
                    <h3>Tourist Visa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga culpa nihil totam animi ex placeat autem obcaecati velit incidunt, eligendi ea nulla facere. Praesentium adipisci, ratione ullam commodi excepturi similique.</p>
                </div>
           
                <div class="card">
                    <img src="icons/tourist.png" alt="tourist-visa">
                    <h3>Tourist Visa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga culpa nihil totam animi ex placeat autem obcaecati velit incidunt, eligendi ea nulla facere. Praesentium adipisci, ratione ullam commodi excepturi similique.</p>
                </div>
           
                <div class="card">
                    <img src="icons/tourist.png" alt="tourist-visa">
                    <h3>Tourist Visa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga culpa nihil totam animi ex placeat autem obcaecati velit incidunt, eligendi ea nulla facere. Praesentium adipisci, ratione ullam commodi excepturi similique.</p>
                </div>
                <div class="card">
                    <img src="icons/tourist.png" alt="tourist-visa">
                    <h3>Tourist Visa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga culpa nihil totam animi ex placeat autem obcaecati velit incidunt, eligendi ea nulla facere. Praesentium adipisci, ratione ullam commodi excepturi similique.</p>
                </div>
           
                <div class="card">
                    <img src="icons/tourist.png" alt="tourist-visa">
                    <h3>Tourist Visa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga culpa nihil totam animi ex placeat autem obcaecati velit incidunt, eligendi ea nulla facere. Praesentium adipisci, ratione ullam commodi excepturi similique.</p>
                </div>
           
        </div>
    </section>


    <section>
        <div class="row">
            <div class="col-6">
                <img src="img/passport.jpg" alt="showcase image">
            </div>
            <div class="col-6">
                <h1>Lorem ipsum, dolor sit amet consectetur adip</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, rerum doloribus. Dolorum quis fuga suscipit, sapiente ad iure</p>
                <a href="#">Contact Now</a>
            </div>
        </div>
    </section>


    <!-- testemonials -->
    <section class="container bg-dark">
        <div class="title white">
            <h2>What Our <span>C</span>lient Say</h2>
        </div>
        <div class="content testemonial">
            <div class="card">
                <img src="img/girish.jpg" alt="tourist-visa">
               
                <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga culpa nihil totam animi ex placeat autem obcaecati velit incidunt, eligendi ea nulla facere. Praesentium adipisci, ratione ullam commodi excepturi similique.</i></p> 
                <h3>someone client</h3>
            </div>
       
            <div class="card">
                <img src="img/girish.jpg" alt="tourist-visa">
                
                <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga culpa nihil totam animi ex placeat autem obcaecati velit incidunt, eligendi ea nulla facere. Praesentium adipisci, ratione ullam commodi excepturi similique.</i></p>
                <h3>someone client</h3>
            </div>
       
            <div class="card">
                <img src="img/girish.jpg" alt="tourist-visa">
                
                <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga culpa nihil totam animi ex placeat autem obcaecati velit incidunt, eligendi ea nulla facere. Praesentium adipisci, ratione ullam commodi excepturi similique.</i></p>
                <h3>someone client</h3>
            </div>
       
        </div>
    </section>


     
    <!-- footer -->
    <?php include 'footer.php' ?>

    <script>
        function showMenu()
        {
            var navitems = document.querySelector('.nav-items');
            var menuBtn = document.querySelector('#menu');
            navitems.classList.toggle('active');
            if(navitems.classList.contains("active")) menuBtn.src = "img/close.png";
            else
                menuBtn.src = "img/menu.png";
            // menuBtn.src = menuBtn.getAttribute("src");
        }
    </script>
</body>
</html>

