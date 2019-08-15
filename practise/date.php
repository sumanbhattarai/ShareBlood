<?php
    include("../modules/connection.php");

    $sql = "SELECT date from example where id = 1" ;
    $data = mysqli_query($conn , $sql) ;
    $result = mysqli_fetch_assoc($data) ;
    $pastDate = strtotime($result['date']);
    $currentDate = time();
    $diff = $currentDate  - $pastDate;
    echo $diff/(60*60*24) ;
    // if( $pastDate - $currentDate > 90)
    // {
    //     echo "True";
    // }
    // else 
    // {
    //     echo "False" ;
    // }
?>