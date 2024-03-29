
<!-- establish connection -->
<?php
   include('modules/checkSession.php') ;
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
    include('modules/loginWithError.php');
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
            <button onclick="window.location.href='signup.php'"> Create Account</button>

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

    <script src="js/login.js"></script>
    
</body>
</html>