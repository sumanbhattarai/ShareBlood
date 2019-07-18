
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
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Philosopher" rel="stylesheet">
</head>
<body>
     <!-- NarBar-->
     <div class = "nav" >
            <img src = "images/trans.png">
            <span id="shareblood">ShareBlood</span>
             <div class="hospital-detail">
                <!--<div class="hospital-name-box">
                   <a href="home.php" class="hospital-name">GANDAKI MEDICAL COLLEGE</a>
                   <a href="home.php" class="hospital-logo"> <i class="fas fa-hospital"></i> </a>
                   
                </div> -->
                <div class="hospital-name-box">
                    <a href="home.php">Gandaki Medical College</a>
                </div>
                <div class="options-box">
                    <i class="fas fa-bell" id="bell" title="Notification"></i>
                    <i class="fas fa-cogs" id="setting" title="Setting"></i>
                </div>
                <div class="logout-box">
                    <button title="Click here to logout." onclick="logoutClick()"><i class="fas fa-sign-out-alt"></i></button>
                </div>
            </div>
            
    </div>


    <script src="js/home.js"></script>
    
</body>
</html>

<?php

echo "Welcome" . "<br>" ;
echo "ID : ".$result['ID']."<br>"; 
echo "Email : ".$result['EMAIL']."<br>";
echo "Password : " . $result['PASSWORD']."<br>";

?>