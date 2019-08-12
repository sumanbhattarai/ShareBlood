<?php
    include('modules/connection.php');
    $id = $_POST['id'] ;
    $fullname = $_POST['fullname'];
    $phonenumber = $_POST['phonenumber'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $cityvillage = $_POST['city-village'];
    $bloodgroup = $_POST['bloodgroup'];

    $query = "UPDATE donor SET `name` = '$fullname' , `phone number` = '$phonenumber' , `state` = '$state' , `district` = '$district' , `city / village` = '$cityvillage' , `blood group` = '$bloodgroup' WHERE id = $id  ";
    $data = mysqli_query($conn , $query);
    




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Updated - ShareBlood</title>
    <link rel="stylesheet" href="css/editDonorSuccess.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Philosopher" rel="stylesheet">
</head>
<body>

    <div class = "main-box">
        <i class="fas fa-thumbs-up" id="thumbs-up"></i>
        <br><br>
       Hey <?php echo $_POST['fullname'] ?>, your information has been successfully updated !
        <br><br>
        <i class="fas fa-arrow-circle-right" id="arrow"></i> <a href="home.php">Go Back to home page</a>

    </div>
</body>
</html>