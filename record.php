<?php
error_reporting(0);
include('modules/connection.php');
include('modules/session.php') ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - ShareBlood</title>
    <link rel="stylesheet" href="css/record.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Philosopher" rel="stylesheet">
</head>
<body>
     <!-- NarBar-->
     <div class = "nav" >
            <img src = "images/trans.png">
            <span id="shareblood">ShareBlood</span>
             <div class="hospital-detail">
                <div class="hospital-name-box">
                    <a href="home.php"><?php  echo $result['name'] ;   ?></a>
                </div>
                <div class="options-box">
                    <!-- <i class="fas fa-bell" id="bell" title="Notification"></i> -->
                    <!-- <div class="notification-count">99</div> -->
                    <i class="fas fa-cogs" id="setting" title="Setting" onclick="window.location.href='settings.php'"></i>
                </div>
                <div class="logout-box">
                    <button title="Click here to logout." onclick="logoutClick()"><i class="fas fa-sign-out-alt"></i></button>
                </div>
            </div>
            
    </div>

    <div class = 'search-box'>
        <br><br><br><br>
        <span id="request-text">Please , enter the phone number and blood group of donor.</span>
        <br><br>
        <form action="donorinfo.php" method="post">
            <input type="text" name = "phonenumber" placeholder="Phone Number" required> <br><br>
            <select name="bloodgroup" id="blood-group" required>
                       <option value="" disabled selected>Select Blood Group</option>
                       <option value="A+">A+</option>
                       <option value="A-">A-</option>
                       <option value="B+">B+</option>
                       <option value="B-">B-</option>
                       <option value="O+">O+</option>
                       <option value="O-">O-</option>
                       <option value="AB+">AB+</option>
                       <option value="AB-">AB-</option>
            </select>
            <br><br>
            <input type="submit" value = "Search Donor">
        </form>

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

    <script src="js/record.js"></script>
</body>
</html>