<?php
include('modules/checkSession.php') ;
include('modules/login.php');
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
           
           <span id="request">Get a call and save a life ?</span> <br><br>
           <span id="phone-error">
           <?php
           if(isset($_GET['phonenumber'])) {
                if($_GET['phonenumber']== 'alreadyExists') {
                    echo  "*Phone number already exists.";
                }
            }
           ?>
           </span>

           <div class ="gatherinformation">
               <form action="donorsuccess.php" method="post">
                   <br><br>
                   <input type="text" name = "fullname" placeholder="Full Name" required> <br><br>
                    <input type="tel" name = "phonenumber" placeholder="Phone Number" pattern="[9]{1}[0-9]{9}" required> <br><br>
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
                   </select>
                   <br><br>
                   <select name="bloodgroup" id="blood-group" class="round" required>
                       <option value="" disabled selected>Select your Blood Group</option>
                       <option value="A+">A+</option>
                       <option value="A-">A-</option>
                       <option value="B+">B+</option>
                       <option value="B-">B-</option>
                       <option value="O+">O+</option>
                       <option value="O-">O+</option>
                       <option value="AB+">AB+</option>
                       <option value="AB-">AB-</option>
                   </select>
                   <br><br>
                   <input type="checkbox" required> <span id="agree-text"> Agree , i haven't donated since 3 months. </span>
                   <br><br>
                   <input type="submit" name="" value="Be a Donor">
               </form>
               <br>
               <span id="question"><a href="editDonor.php" target="_blank">Already a donor ? Edit your information.</a></span>

           </div>

       </div>
       <div class ="options">
            
           <br><br><br><br><br><br>
           <button onclick="window.location.href='signup.php'">Register as Health Center</button> <br><br><br>
           <!-- <button>Post Blood Request</button><br><br><br> -->
           <button onclick="window.location.href='bloodRequests.php'">See the Blood Requests</button>
           
           

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
