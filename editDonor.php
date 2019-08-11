

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit - ShareBlood</title>
    <link rel="stylesheet" href="css/editDonor.css">
</head>
<body>
     <!-- NarBar-->
     <div class = "nav" >
            <img src = "images/trans.png">
            <span id="shareblood">ShareBlood</span>
    </div>

    <!-- Body -->
    <div class="outer-box">
        <br>
        Enter your phone number :
        <br>
        <?php
            if(isset($_GET['phone'])) {
                if($_GET['phone']== 'notMatched') {
                    echo  "<span id='error-message'>*Invalid Phone number.</span>";
                }
            }
        ?>
        <form action="modules/editDonorProcess.php" method="POST">
            <input type="text" name="phonenumber" placeholder="Phone Number" requrired> 
            <br><br>
            <input type="submit" name="submit" value="Submit">
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

    <!-- JavaScript -->
    <script src="js/editDonor.js"></script>
</body>
</html>