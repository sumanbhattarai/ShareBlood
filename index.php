<?php
include('modules/checkSession.php') ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShareBlood</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

    <!-- Nav Bar and login -->
    <div class = "nav" >
            <img src = "images/trans.png">
            <span id="shareblood">ShareBlood</span>
       
        <div class = "login">
            <form action="" method = "post" >
                <input type = "email" name = "email" placeholder = "Email" required >
                <input type = "password" name = "password" placeholder="Password" required>
                <input type = "submit" value = "Login" name="login">
            </form>
            <span id="forgetPassword"> <a href = "">forget password ? </a></span>
        </div>

    </div>

   <!-- Body part -->
   <div class = "bodypart" >
       <div class = "bannerbox">
           <img src="images/banner.png" alt="ShareBlood Banner">
           <span id="slogan"><b>“</b> To give blood you need neither extra <br> strength nor extra food, and <br>you will save a life. <b>“</b></span>

       </div>
       <div class = "donnorregister">
           <br><br><br>
           <span id="request">Get a call and save a life ?</span> <br><br>
           <div class ="gatherinformation">
               <form action="">
                   <br><br>
                   <input type="text" name = "fullname" placeholder="Full Name" required> <br><br>
                   <input type="tel" name = "phonenumber" placeholder="Phone Number" required> <br><br>
                   <input type="text" name="address" placeholder="State - District - City" required> <br><br>
                   <select name="" id="" class="round" required>
                       <option value="" disabled selected>Select your Blood Group</option>
                       <option value="">A+</option>
                       <option value="">A-</option>
                       <option value="">B+</option>
                       <option value="">B-</option>
                       <option value="">O+</option>
                       <option value="">O-</option>
                       <option value="">AB+</option>
                       <option value="">AB-</option>
                   </select>
                   <br><br>
                   <input type="submit" name="" value="Be a Donor">
               </form>
               <br>
               <span id="question"><a href="https://www.brmsonline.com/blog/wellness/healthcare/2018/benefits-of-blood-donation" target="_blank">Why should i donate blood ?</a></span>

           </div>

       </div>
       <div class ="options">
           <br><br><br><br><br>
           <button onclick="window.location.href='signup.php'">Register as Health Center</button> <br><br><br>
           <button>Post Blood Request</button><br><br><br>
           <button>See the Blood Requests</button>

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

   <!-- JavaScript file -->
    <script src="js/index.js"></script>
</body>
</html>

<?php  
include('modules/login.php');
?>