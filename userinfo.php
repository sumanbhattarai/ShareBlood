<?php
    include('modules/connection.php');
    include('modules/checkSession.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Requests - Share Blood</title>
    <link rel="stylesheet" href="css/userinfo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Philosopher" rel="stylesheet">
</head>
<body>
       <!-- NarBar-->
     <div class = "nav" >
            <img src = "images/trans.png">
            <span id="shareblood">ShareBlood</span>
    </div>

    <!-- Body section -->
    <div class = "main-box">
        One more step to save a life ! <br><br>
        <div class="inner-box">
            <br>
            <form action="">

            <input type="text" name="user-name" placeholder="Full Name" ><br>
            <input type="text" name="user-age" placeholder="Age"> <br>
            <input type="text" name="user-phone-number" placeholder="Phone Number"> <br> 
            <select name="state" id="">
                <option value="" disabled selected> State No.</option>
                <option value="4">4</option>
            </select>
            <br>
            <select name="district" id="">
                <option value="" disabled selected>District</option>
                <option value="Kaski">Kaski</option>
            </select>
            <br>
            <select name="city-village" id="">
                <option value="" disabled selected>City / Village</option>
                <option value="Kaski">Pokhara</option>
            </select>
            <br>
            <input type="text" name="blood-group" style="cursor: not-allowed;" value ="<?php echo $_POST['blood-group'] ?>" readonly> <br><br>
            <input type="submit" value="Submit">

            



            </form>

        </div>

    </div>
    <img src="images/savelife.png" alt="Save life" id="save-life">

    <!-- JavaScript -->
    <script src="js/userinfo.js"></script>


</body>
</html>
