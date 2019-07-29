<?php
session_start(); 
include('connection.php');
$email = $_SESSION['email'] ;

if($email==false)
{

    header('location:index.php');
}

$query = " SELECT * FROM try WHERE EMAIL='$email' " ;
$data = mysqli_query($conn , $query) ;
$result = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings - ShareBlood</title>
    <link rel="stylesheet" href="css/settings.css">
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
                    <a href="home.php">Gandaki Medical College</a>
                </div>
                <div class="options-box">
                    <i class="fas fa-bell" id="bell" title="Notification"></i>
                    <i class="fas fa-cogs" id="setting" title="Setting" onclick="window.location.href='settings.php'"></i>
                </div>
                <div class="logout-box">
                    <button title="Click here to logout." onclick="logoutClick()"><i class="fas fa-sign-out-alt"></i></button>
                </div>
            </div>
            
    </div>

    <!-- Body part  -->
    <div class = "main-box">
        <div class="setting-title">
            <span id="setting-heading">SETTINGS</span>

        </div>
        <div class="setting-table">
            <h3>General Account Setting</h3>   
            <table id="setting-table">
                <tr id="tr1">
                    <td>Name</td>
                    <td>Gandaki Medical College</td>
                    <td><i class="fa fa-edit" id="edit1"></i></td>
                    <td>Edit</td>
                </tr>
                <tr id="tr2">
                    <td>Email</td>
                    <td>gmc@gmail.com</td>
                    <td><i class="fa fa-edit" id="edit2"></i></td>
                    <td>Edit</td>
                </tr>
                <tr id="tr3">
                    <td>Password</td>
                    <td>Update you password</td>
                    <td><i class="fa fa-edit" id="edit3"></i></td>
                    <td>Edit</td>
                </tr>
                <tr id="tr4">
                    <td>Telephone</td>
                    <td>0565-70053</td>
                    <td><i class="fa fa-edit" id="edit4"></i></td>
                    <td>Edit</td>
                </tr>
                <tr id="tr5">
                    <td>State</td>
                    <td>State no. 4</td>
                    <td><i class="fa fa-edit" id="edit5"></i></td>
                    <td>Edit</td>
                </tr>
                <tr id="tr6">
                    <td>District</td>
                    <td>Kaski</td>
                    <td><i class="fa fa-edit" id="edit6"></i></td>
                    <td>Edit</td>
                </tr>
                <tr id="tr7">
                    <td>City / Village</td>
                    <td>Pokhara</td>
                    <td><i class="fa fa-edit" id="edit7"></i></td>
                    <td>Edit</td>
                </tr>
               

            </table>
                <br><br>
                <span id="info">If you want to delete your account permanently then you can go through the button below.</span>
                <br><br>
            <button id="btn-delete">Delete Account </button>


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

     <!-- JavaScript -->
    <script src="js/settings.js"></script>
    
</body>
</html>