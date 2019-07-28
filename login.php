
<!-- establish connection -->
<?php
    session_start();
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - ShareBlood</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
     <!-- NarBar-->
     <div class = "nav" >
            <img src = "images/trans.png">
            <span id="shareblood">ShareBlood</span>
    </div>

    <!-- body -->
    <p class="error-message">
    <?php

        if(isset($_POST['login']))
        {
            $email = $_POST['email'] ;
            $password = $_POST['password'] ;
            $query = " SELECT * FROM try WHERE EMAIL='$email' && PASSWORD=='$password' " ;
            $data = mysqli_query($conn , $query) ;
            $total = mysqli_num_rows($data) ;
            if($total !=0)
            {
                $_SESSION['email'] = $email ; 
                header('location:home.php');
            }
            else
            {
                echo "* Invalid Email or Password" ;
            }
        }


    ?>
    </p>
    <div class = "login-box">
        <div class ="inner-box">
            <br>
            <span id="login-text">Log into ShareBlood</span> <br> <br>
            <form action="" method = "POST">
                <input type="email" name="email" placeholder="Email" required> <br> <br>
                <input type="password" name="password" placeholder="Password" required> <br><br>
                <input type="submit" value = "Login" name="login">
                <br><br>
                <span id="forget-password"><a href="#">Forget Password ? </a></span>
                 
            </form>
            <br>
            <br>
            <hr>
            <span id="or">or</span>
            <br>
            <button> Create Account</button>

        </div>

    </div>


     <!-- Footer -->
   <div class="footer">
        | <a href="about.html" target="_Blank">About</a>
        | <a href="privacy.html" target="_Blank">Privacy Policy</a>
        | <a href="terms.html" target="_Blank">Terms</a>
        | <a href="cookies.html" target="_Blank">Cookies Policy</a>
        | <a href="help.html" target="_Blank">Help</a>
        | ShareBlood &copy; 2019 |
    </div>
    
</body>
</html>