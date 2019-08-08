<?php

    include('modules/connection.php');
    include('modules/session.php') ;
            /* preventing file from direct access */
            if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
                /* 
                   Up to you which header to send, some prefer 404 even if 
                   the files does exist for security
                */
                header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        
                /* choose the appropriate page to redirect users */
                die( header( 'location: home.php' ) );
        
            }

    $phonenumber = $_POST['phonenumber'] ;
    $currentDate = date('Y-m-d');
    $query = "UPDATE donor SET `last donated` ='$currentDate' WHERE `phone number` = '$phonenumber' " ;
    $data = mysqli_query($conn , $query) ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Updated - ShareBlood</title>
    <link rel="stylesheet" href="css/updated.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Philosopher" rel="stylesheet">
</head>
<body>

    <div class = "main-box">
        <i class="fas fa-thumbs-up" id="thumbs-up"></i>
        <br><br>
        Donor's record of donation has been successfully updated !
        <br><br>
        <i class="fas fa-arrow-circle-right" id="arrow"></i> <a href="home.php">Go Back to home page</a>

    </div>
</body>
</html>