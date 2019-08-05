<?php
    include('modules/connection.php');
    include('modules/checkSession.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Requests - Share Blood</title>
    <link rel="stylesheet" href="css/bloodrequests.css">
</head>
<body>
       <!-- NarBar-->
     <div class = "nav" >
            <img src = "images/trans.png">
            <span id="shareblood">ShareBlood</span>
    </div>

    <!-- Showing the blood request posts -->

    <div class = "request-post-box">
        <table onmouseover="tableHovered(event)" onmouseout="tableOut(event)">
            <tr>
                <td>Patient Name</td>
                <td>:</td>
                <td>Danish Iqbal</td>
            </tr>
            <tr>
                <td>Patient Age </td>
                <td>:</td>
                <td>21</td>
            </tr>
            <tr>
                <td>Hospital Name</td>
                <td>:</td>
                <td>Chitwan Medical College</td>
            </tr>
            <tr>
                <td>Hospital Address</td>
                <td>:</td>
                <td>State no. 3 - Chitwan - Bharatpur</td>
            </tr>
            <tr>
                <td>Hospital Telephone</td>
                <td>:</td>
                <td>3045345</td>
            </tr>
            <tr>
                <td>Blood Group</td>
                <td>:</td>
                <td>AB+</td>
            </tr>
            <tr>
                <td>Need within </td>
                <td> : </td>
                <td>2019-04-05</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>2:00 PM</td>
            </tr>
            <tr>
                <td>Pint required</td>
                <td>:</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Cause of requirement</td>
                <td>:</td>
                <td>Accident</td>
            </tr>

        </table>

       

    </div>


</body>
<script src="js/bloodrequests.js"></script>
</html>