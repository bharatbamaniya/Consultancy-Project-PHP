<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/index/index.css">

     <!-- Favicons -->
     <link rel="apple-touch-icon" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <title>About</title>

</head>

<body>

    <!-- navbar -->
    <?php include 'header.php' ?>


        <!-- image slider -->
        <section class="container">
            <header>
                <div id="slider">
                    <ul class="slides">
                        <li class="slide"><img src="img/passport.jpg" /></li>
                        <li class="slide"><img src="img/world-map.jpg" /></li>
                        <li class="slide"><img src="img/header-image.svg" /></li>
                        <li class="slide"><img src="img/passport.jpg" /></li>
                        <li class="slide"><img src="img/world-map.jpg" /></li>
                        <li class="slide"><img src="img/header-image.svg" /></li>

                    </ul>
                </div>
            </header>
        </section>


        <!-- about section -->
        <section class="about" id="about">
            <div class="row">
                <div class="col50">
                    <h2 class="titleText"><span>A</span>bout Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quam, nobis sunt nemo numquam
                        laboriosam quia perferendis, culpa perspiciatis quibusdam quae officiis. Corrupti veniam
                        quibusdam
                        optio tenetur magnam quo expedita! Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Vero
                        dicta in quasi, nam ratione at, earum nemo veritatis illum dolorem quia excepturi delectus, quam
                        ut
                        possimus explicabo? Ab, explicabo quaerat?
                        <br><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam corporis, officiis consequuntur
                        debitis et corrupti. Inventore, voluptas beatae ratione enim.
                    </p>
                </div>
                <div class="col50">
                    <div class="imgbx">
                        <img class="image" src="img/pass.jpg" alt="about image">
                    </div>
                </div>
            </div>
        </section>

        <!-- testimonials -->
        <section class="testimonials" id="testimonials">
            <div class="title white">
                <h2 class="titleText">They <span>S</span>aid About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgbx">
                        <img src="img/girish.jpg" alt="testimonials-image">
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente corporis, inventore
                            quasi fugit vero dolorum impedit esse tempora </p>
                        <h3>Someone Famous</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgbx">
                        <img src="img/girish.jpg" alt="testimonials-image">
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente corporis, inventore
                            quasi fugit vero dolorum impedit esse tempora Lorem ipsum dolor sit amet consectetur
                            adipisicing</p>
                        <h3>Someone Famous</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgbx">
                        <img src="img/girish.jpg" alt="testimonials-image">
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente corporis, inventore
                            quasi fugit vero dolorum impedit esse tempora Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Sapiente </p>
                        <h3>Someone Famous</h3>
                    </div>
                </div>
            </div>
        </section>

   <!-- footer -->
   <?php include 'footer.php' ?>

        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>
            $(function () {
                //value for animation  
                var width = 900;
                var animationSpeed = 1000;
                var pause = 3000;
                var currentSlide = 1;
                //Dom element.   
                var $slider = $('#slider');
                var $sliderAnimation = $slider.find('.slides');
                var $slides = $sliderAnimation.find('.slide');

                setInterval(function () {
                    $sliderAnimation.animate({ 'margin-left': '-=' + width }, animationSpeed, function () {
                        currentSlide++;
                        if (currentSlide === $slides.length) {
                            $sliderAnimation.css('margin-left', 0);
                            currentSlide = 1;
                        }
                    });
                }, pause);
            });
        </script>


    </body>

    </html>