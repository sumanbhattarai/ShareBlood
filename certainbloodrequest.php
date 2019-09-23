<?php
    include('modules/connection.php');
    include('modules/checkSession.php');
    include('modules/requestVerify.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Requests - Share Blood</title>
    <link rel="stylesheet" href="css/certainbloodrequest.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Philosopher" rel="stylesheet">
</head>
<body>
       <!-- NarBar-->
     <div class = "nav" >
            <img src = "images/trans.png">
            <span id="shareblood">ShareBlood</span>
    </div>

    <!-- Showing the blood request posts -->

    <div class = "request-post-box">
        <?php
        $state = $_POST['state'];
        $district = $_POST['district'];
        $cityvillage = $_POST['city-village'];
        $address = 'State '.$state.' - '.$district.' - '.$cityvillage ; 
        $bloodgroup = $_POST['bloodgroup'];

        $query = "SELECT * from bloodrequests WHERE `hospital address` = '$address' and `blood group` = '$bloodgroup' and `status` = 1 ORDER BY `date` , `time` " ;
        $data = mysqli_query($conn , $query) ;
        if(mysqli_num_rows($data)>0)
        {
            while($row = mysqli_fetch_assoc($data))
            {

        ?>
                <table>
                    <tr>
                        <td>Patient Name</td>
                        <td>:</td>
                        <td><?php echo $row['patient name']; ?></td>
                    </tr>
                    <tr>
                        <td>Patient Age </td>
                        <td>:</td>
                        <td><?php echo $row['patient age']; ?></td>
                    </tr>
                    <tr>
                        <td>Hospital Name</td>
                        <td>:</td>
                        <td><?php echo $row['hospital name']; ?></td>
                    </tr>
                    <tr>
                        <td>Hospital Address</td>
                        <td>:</td>
                        <td><?php echo $row['hospital address']; ?></td>
                    </tr>
                    <tr>
                        <td>Hospital Telephone</td>
                        <td>:</td>
                        <td><?php echo $row['hospital telephone']; ?></td>
                    </tr>
                    <tr>
                        <td>Blood Group</td>
                        <td>:</td>
                        <td><?php echo $row['blood group']; ?></td>
                    </tr>
                    <tr>
                        <td>Need within </td>
                        <td> : </td>
                        <td><?php echo $row['date']; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php echo $row['time']; ?></td>
                    </tr>
                    <tr>
                        <td>Pint required</td>
                        <td>:</td>
                        <td><?php echo $row['pint']; ?></td>
                    </tr>
                    <tr>
                        <td>Cause of requirement</td>
                        <td>:</td>
                        <td><?php echo $row['cause']; ?></td>
                    </tr>
                    <tr>
                        <td colspan = 3 style="text-align:center ; padding:20px;">
                            <form method="post" action="userinfo.php">
                                <input type="text" name="hospital-email" value="<?php echo $row['email']; ?>" style="display:none ;">
                                <input type="text" name="patient-name" value="<?php echo $row['patient name']; ?>" style="display:none ;">
                                <input type="text" name="patient-age" value="<?php echo $row['patient age']; ?>" style="display:none ;">
                                <input type="text" name="blood-group" value="<?php echo $row['blood group']; ?>" style="display:none ;">
                                <input type="submit" value="I want to donate">
                            </form>
                        </td>
                    </tr>

                </table>
                <br><br>
            <?php
                }
            }

            ?>
    </div>

    <!-- Go to top button -->
    <i class="fas fa-arrow-alt-circle-up" id="goto-top" title="Goto top" onclick="gotoTop()"></i>

        <!-- Footer -->
        <div class="footer">
            | <a href="about.html" target="_Blank">About</a>
            | <a href="privacy.html" target="_Blank">Privacy Policy</a>
            | <a href="terms.html" target="_Blank">Terms</a>
            | <a href="cookies.html" target="_Blank">Cookies Policy</a>
            | <a href="help.html" target="_Blank">Help</a>
            | ShareBlood &copy; 2019 |
    </div>

            <script src="js/certainbloodrequest.js"></script>
</body>
</html>