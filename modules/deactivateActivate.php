<?php
    include('connection.php');
    $id = $_POST['id'] ;
    $query = "UPDATE donor SET `status`= NOT `status` WHERE id = $id  ";
    $data = mysqli_query($conn , $query);
    header('location:../index.php');
    
?>