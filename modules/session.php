<?php
session_start(); 
include('connection.php') ;
$email = $_SESSION['email'] ;

if($email==false)
{

    header('location:index.php');
}

$query = " SELECT * FROM hospital WHERE email='$email' " ;
$data = mysqli_query($conn , $query) ;
$result = mysqli_fetch_assoc($data);


?>