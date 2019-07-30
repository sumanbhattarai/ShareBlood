
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup - ShareBlood</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <!-- NarBar-->
    <div class = "nav" >
            <img src = "images/trans.png">
            <span id="shareblood">ShareBlood</span>
    </div>

    <div class="bodypart">

        <div class="firstbox">
            <img src="images/logo.png" alt="">
            <div class = "smallbox">
                <span id="signuptext">SIGN UP</span>

            </div>
            <div class="bigbox">
                <br><br><br>
                <form action="verify.html" onsubmit="return validate()">
                    <input type="text" name="name" id="name" placeholder="Hospital Name" ><br><br>
                    <input type="email" name="email" id="email" placeholder="Email" ><br><br>
                    <input type="password" name="password" id="password" placeholder="Password" ><br><br>
                    <input type="text" name="location" id="location" placeholder="Location" ><br><br>
                    <input type="tel" name="telephone" id="telephone" placeholder="Telephone Number" ><br><br>
                    <input type="checkbox" name="" id="checkagree"> <span id="agree">Agree all terms & Conditions</span> <br><span id="erroragree"></span><br>
                    <input type="submit" value="Continue">


                </form>

            </div>

        </div>

        <div class="secondbox">
            <br><br>
            <span id ="sentence">Register to get the donor list nearby your health center !</span>
            <br><br>
            <img src="images/hospitalvector.png" alt="Hospital Vector">

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

        <!-- JavaScript File  -->
    <script src="js/signup.js"></script>
    
</body>
</html>