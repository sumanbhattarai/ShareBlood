<?php

    session_start();
    include("modules/connection.php");
    if(isset($_SESSION['email']))
    {
    header('location:home.php') ;
    }


?>