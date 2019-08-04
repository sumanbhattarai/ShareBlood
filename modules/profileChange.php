<?php

if($_POST['submitimage'])
{
    $filename = $_FILES["uploadimage"]["name"] ;
    $tempname = $_FILES["uploadimage"]["tmp_name"] ;
    $filename = md5($filename. time());
    $folder = "images/uploaded/".$filename;
    // echo $folder ;
    move_uploaded_file($tempname , $folder);

    $query = "UPDATE hospital set picture = '$folder' where email = '$email' " ;
    mysqli_query($conn , $query) ;
    header('location:home.php');
    

}


?>