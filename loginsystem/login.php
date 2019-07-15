
<?php
session_start();
include("connection.php");
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
    <form action="" method="post">
        Email : <input type="email" name="email" placeholder="Email" > <br> <br>
        Password : <input type="password" name="password" placeholder="Password"> <br><br>
        <input type="submit" name="submit" value ="Login">
    </form>
    
</body>
</html>


<?php  
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = " SELECT * FROM try WHERE EMAIL='$email' && PASSWORD='$password' " ;
    $data = mysqli_query($conn , $query) ;
    $total = mysqli_num_rows($data) ;
    if($total !=0)
    {
        $_SESSION['email'] = $email ; 
        header('location:home.php');
    }
    else
    {
        echo "Login Failed";
    }
    


}