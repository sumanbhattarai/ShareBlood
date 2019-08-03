<?php 
session_start();
if (!isset($_SESSION['authenticated']))
{
    //if the value was not set, it will redirect the user to signup page.
    header('Location: signup.php');
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verification - ShareBlood</title>
    <link rel="stylesheet" href="css/verify.css">
</head>
<body>
     <!-- NarBar-->
     <div class = "nav" >
            <img src = "images/trans.png">
            <span id="shareblood">ShareBlood</span>
    </div>

    <!-- Body -->
    <div class="mainbox">
        <img src="images/logo.png" alt="">
        <span class="verifytext">Verify your Email to complete Signup !</span>
        <br><br>
        <div class="codebox">
            <br><br><br>
            <span class="verifytext"> Enter the Code : </span>
            <br><br><br>
            <form action="">
                <input type="text" name="" id="code" placeholder="Code"> <br><br>
                <span id="resend"><a href=""><u>Didn't get the code ? Click here to resend.</u></a></span>
                <br>
                <input type="submit" value="Submit" >
            </form>

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

    <script>
        document.getElementById("code").onfocus = function(){
        document.getElementById("code").style.border = "1px solid #2898E9 " ;
        }

        document.getElementById("code").onblur = function(){
        document.getElementById("code").style.border = "1px solid #707070 " ;
        }


    </script>
    
</body>
</html>