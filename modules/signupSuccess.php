<?php
include('connection.php');
date_default_timezone_set("Asia/Kathmandu");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$state = $_POST['state'];
$district = $_POST['district'];
$cityvillage = $_POST['city-village'];
$telephone = $_POST['telephone'];
$defaultImage = 'images/uploaded/default.png' ;

$hashedpassword = password_hash($password , PASSWORD_DEFAULT);
$currentDateTime = date("Y-m-d H:i:s");

// echo $name."<br>" ;
// echo $email."<br>" ;
// echo $password."<br>" ;
// echo $state."<br>" ;
// echo $district."<br>" ;
// echo $cityvillage."<br>" ;
// echo $telephone."<br>" ;
// echo $defaultImage."<br>" ;
// echo $hashedpassword."<br>" ;
// echo $currentDateTime."<br>" ;




$sql = "INSERT INTO hospital ( `name` , `email` , `password` , `picture` , `telephone` , `state` , `district` ,  `city / village` , `created date` )
        VALUES( '$name' , '$email' , '$hashedpassword' , '$defaultImage' , '$telephone' , $state , '$district' , '$cityvillage' , '$currentDateTime'  )" ;
$data  = mysqli_query($conn , $sql);

echo "Please wait , we're redirecting you to the login page .... ";
header( "refresh:5 ; url= ../login.php" );

?>