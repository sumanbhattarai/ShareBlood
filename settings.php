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
</head>
<body>

<h1>Welcome to the Setting Section</h1>
    
</body>
</html>