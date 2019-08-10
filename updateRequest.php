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

            $hname = $_POST['hospital-name'];
            $htelephone = $_POST['hospital-telephone'];
            $haddress = $_POST['hospital-address'];
            $pname = $_POST['patient-name'];
            $page = $_POST['patient-age'];
            $bloodgroup = $_POST['blood-group'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $pint = $_POST['pint-required'];
            $cause = $_POST['cause'];

            $query = "INSERT INTO bloodrequests (`patient name` , `patient age` , `hospital name` , `hospital address` , `hospital telephone` , `blood group` , `date` , `time` , `pint` , `cause`) 
                      VALUES ('$pname' , '$page' , '$hname' , '$haddress' , $htelephone , '$bloodgroup' , '$date' , '$time' , $pint , '$cause' )  " ;
            
            $data  = mysqli_query( $conn , $query) ;



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
        Blood request has been successfully posted. You'll get an email if someone is interested to donate.
        <br><br>
        <i class="fas fa-arrow-circle-right" id="arrow"></i> <a href="home.php">Go Back to home page</a>

    </div>
</body>
</html>