<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/index/index.css">

     <!-- Favicons -->
     <link rel="apple-touch-icon" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <title>visa consultant</title>

</head>
<?php
$name= $email= $msg ="";
$nmerr =$emailerr = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //if user submitted form then this code will get excuted
    if(empty($_POST['nm']))
        $nmerr = "Name is must required.";
    else
        $name = $_POST['nm'];

    if(empty($_POST['email']))
        $emailerr = "Email is must required.";
    else
        $email = $_POST['email'];
        
    $msg = $_POST['msg'];
        
}
?>
<body>

    <!-- navbar -->
    <?php include 'header.php' ?>
    <!--  -->

        <!-- contact -->
       
        
        <section class="contact" id="contact" >
            <div class="title">
                <h2 class="titleText"><span>C</span>ontact Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
            </div>
            <form class="contactForm" name="loginForm" method="post" action=<?php $_SERVER['PHP_SELF'] ?>>
                <h3>Send Message</h3>
                <table>
                    <tr>
                        <td>
                            <div class="inputBox">
                                <input type="text" name="nm" placeholder="Name" value=<?php echo $name ?>>
                            </div>
                        </td>
                        <td> <span class="red">*<?php echo $nmerr?></span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="inputBox">
                                <input type="email" name="email" placeholder="Email" value=<?php echo $email ?>> 
                            </div>
                        </td>
                        <td>
                            <span class="red">* <?php echo $emailerr ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="inputBox">
                                <textarea type="text" name="msg" placeholder="Massage" value=<?php echo $msg ?>></textarea>
                            </div>
                        </td>
                        <td><small id="error_3"></small></td>
                    </tr>

                    <tr>
                        <td colspan="3" align="left">
                            <div class="inputBox">
                                <input type="submit" value="Send">
                            </div>
                        </td>
                        
                    </tr>
                    
                </table>
            </form>
        </section>
        <!--  -->
        
       
    <!--  -->
    <!-- footer -->
    <?php include 'footer.php' ?>

    </body>

    </html>