<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter Blood Requests</title>
    <link rel="stylesheet" href="css/filterbloodrequest.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Philosopher" rel="stylesheet">
</head>
<body>

    <!-- NarBar-->
    <div class = "nav" >
            <img src = "images/trans.png">
            <span id="shareblood">ShareBlood</span>
    </div>

    <!-- Body Section -->
    <div class="main-box">
        <div class = "filter-box">
            <i class="fas fa-sort" id="filter-logo"></i>
            Filter By :
        </div>
        <form action="certainbloodrequest.php" method="POST">
                    <select name="state" id="state" required>
                       <option value="" disabled selected>State</option>
                       <option value="4">4</option>
                   </select>
                   <select name="district" id="district" required>
                       <option value="" disabled selected>District</option>
                       <option value="Kaski">Kaski</option>
                   </select>
                   <select name="city-village" id="city-village" required>
                       <option value="" disabled selected>City / Village</option>
                       <option value="Pokhara">Pokhara</option>
                   </select>
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
                   <br>
                   <input type="submit" name="submit" value="See Filtered Blood Requests">
        
        </form>
        <br><br><br><br>
        <span id="or">OR</span>
        <hr>
        <br><br>
        <i class="fas fa-arrow-circle-right" id="arrow"></i> <a href="" id="see-all">See all the blood request without filter</a>
        
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