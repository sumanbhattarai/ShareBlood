
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
                <form action="modules/signupSuccess.php" method="POST">
                    <input type="text" name="name" id="name" placeholder="Hospital Name" required ><br><br>
                    <input type="email" name="email" id="email" placeholder="Email" required ><br><br>
                    <input type="password" name="password" id="password" placeholder="Password" required ><br><br>
                    <select name="state" id="state" required>
                       <option value="" disabled selected>State</option>
                       <option value="4">4</option>
                   </select>
                   <select name="district" id="district" required>
                       <option value="" disabled selected>District</option>
                       <option value="Kaski">Kaski</option>
                   </select><br><br>
                   <select name="city-village" id="city-village" required>
                       <option value="" disabled selected>City / Village</option>
                       <option value="Pokhara">Pokhara</option>
                   </select> <br><br>
                    <input type="tel" name="telephone" id="telephone" placeholder="Telephone Number" required ><br><br>
                    <input type="checkbox" name="" id="checkagree" required> <span id="agree">Agree all terms & Conditions</span> <br>
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