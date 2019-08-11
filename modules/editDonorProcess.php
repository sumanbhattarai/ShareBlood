<?php
    if(!isset($_POST['submit'])) {
        header("Location: ../editDonor.php");
    } else {

        $phone = $_POST['phonenumber'];
        include 'connection.php';
        $sql = "SELECT * FROM donor WHERE `phone number` = '$phone';";
        $data = mysqli_query($conn,$sql);
        $total = mysqli_num_rows($data);

        if($total == 0) {
            header("Location: ../editDonor.php?phone=notMatched");
            exit();
        } else {
            echo "otp code"; //to-do
        }
    }
?>