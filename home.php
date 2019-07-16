
<?php
session_start(); 
include('connection.php');
$email = $_SESSION['email'] ;

if($email==true)
{

}
else
{
    header('location:index.php');
}
$query = " SELECT * FROM try WHERE EMAIL='$email' " ;
$data = mysqli_query($conn , $query) ;
$result = mysqli_fetch_assoc($data);


echo "Welcome" . "<br>" ;
echo "ID : ".$result['ID']."<br>"; 
echo "Email : ".$result['EMAIL']."<br>";
echo "Password : " . $result['PASSWORD']."<br>";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="logout.php">Logout</a>
    
</body>
</html>