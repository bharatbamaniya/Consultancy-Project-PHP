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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <title>Login</title>

</head>


<?php
// define variables and set to empty values
$name = $pass = $nameErr =$passErr = $queryStatus = "";
$validname = 0;
$validpass = 0;
$validuser = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["uname"])) {
        $nameErr = "Userame is required";
    } else {
        $name = test_input($_POST["uname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9_ ][a-zA-Z0-9_ ]*$/",$name)) {
        $nameErr = "Username should contain alphabets, Numbers or UnderScore Only";
        }
        else{ $validname = 1; }
    }

    if (empty($_POST["pass"])) {
        $pass = "";
    } else {
        $pass = test_input($_POST["pass"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match(('/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,13}$/'),$pass)) {
           $passErr = "Password should contain one captial letter, one Small letter, one Special Character, One Number";
        }else{
        $validpass = 1; 
        }

    }

    if ($validpass && $validname) {

        $conn = mysqli_connect("localhost","root","","db1");
        if(!$conn)
            $queryStatus = "Error in Connection establishment!!";

        $sql_query = "SELECT username, password FROM authenticate";
        $result = mysqli_query($conn, $sql_query);


        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                if($row["username"] === $name && $row["password"] == $pass){
                    $validuser = 1;
                    $_SESSION["username"] = $name;
                    break;
                }
            }
        }


    mysqli_close($conn);

    }

  
    if($validuser)
    {
        header("Location: inner-page.php");
    }

}

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>

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
                <li><a href="register.php" onclick="showMenu()" class="login-btn">Register</a></li>
            </ul>
        </div>
        <div class="menu-btn">
            <img src="img/menu.png" data-src="img/close.png" alt="menu-btn" id="menu" onclick="showMenu()">
        </div>
    </nav>

        <section class="login-form">
            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" name="loginForm" onsubmit="return validation()">
                <h1>Login</h1>
                <table>
                    <tr>
                        <td>Username</td>
                        <td> <input type="text" name="uname" oninput="validinput()" value=<?php echo $name ?>></td>
                        <td><small id="error_1"></small></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td> <input type="password" name="pass" oninput="validpass()" value=<?php echo $pass ?>></td>
                        <td><small id="error_2"></small></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="left">
                            <input type="submit" value="Login">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="left">
                            <span>Not Register Yet ? <a href="register.php" style="text-decoration: none;">Register</a></span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <div class="text-center"><span><?php echo $nameErr ?></span></div>
                            <div class="text-center"><span><?php echo $passErr ?></span></div>
                            <div class="text-center"><span><?php echo $queryStatus?></span></div>
                        </td>
                    </tr>
                </table>
            </form>
        </section>

    <!-- footer -->
    <?php include 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>

        var valid = false;

        function validation() {
            validinput();
            validpass();
          

            var errormsg = new Array();
                errormsg[0] = document.getElementById('error_1').value;
                errormsg[1] = document.getElementById('error_2').value;
                
                
            errormsg.forEach( element => {
                if(element != '' || element != null)
                    return false;
            });
            return valid;
        }

        function validinput() {
            var textbox = document.loginForm.uname;
            var msg = document.getElementById("error_1");
            var str1 = /^[a-zA-Z0-9_ ][a-zA-Z0-9_ ]*$/;

            if (textbox.value == null || textbox.value == "") {

                textbox.style.borderColor = "red";
                msg.innerHTML = "*Enter Your UserName";
                textbox.style.borderColor = "red";
                valid = false;
            }
            else if (!str1.test(textbox.value)) {
                textbox.style.borderColor = "red";

                msg.innerHTML = "Name should only contain alphabets, Numbers or UnderScore";
                valid = false;
            }
            else {
                textbox.style.borderColor = "green";
                msg.innerHTML = "";
                valid = true;
            }
           
        }
        function validpass() {
            var pwd = document.loginForm.pass;
            var error_2 = document.getElementById("error_2");
            var str1 =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,13}$/;;
            if (pwd.value == null || pwd.value == "") {
                // error_2.innerHTML = pwd.value;  
                pwd.style.borderColor = "red";
                error_2.innerHTML = "*Enter Your Password";
                valid = false;
            }
            else if (!str1.test(pwd.value)) {
                pwd.style.borderColor = "red";
                    error_2.innerHTML = "*Password Should contain minimum one Digit, one Special Character and between 8 to 13 character";
                    valid = false;
            }

            else {
                pwd.style.borderColor = "green";
                error_2.innerHTML = "";
                valid = true;
            }
        }
    </script>
    

</body>
</html>

