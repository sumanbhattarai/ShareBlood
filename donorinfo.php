<?php
    include('modules/connection.php');
    include('modules/session.php') ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donor  Info - Share Blood </title>
    <link rel="stylesheet" href="css/donorinfo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Philosopher" rel="stylesheet">
</head>
<body>

    <!-- NarBar-->
    <div class = "nav" >
                <img src = "images/trans.png">
                <span id="shareblood">ShareBlood</span>
                <div class="hospital-detail">
                    <div class="hospital-name-box">
                        <a href="home.php"><?php  echo $result['name'] ;   ?></a>
                    </div>
                    <div class="options-box">
                        <i class="fas fa-bell" id="bell" title="Notification"></i>
                        <div class="notification-count">99</div>
                        <i class="fas fa-cogs" id="setting" title="Setting" onclick="window.location.href='settings.php'"></i>
                    </div>
                    <div class="logout-box">
                        <button title="Click here to logout." onclick="logoutClick()"><i class="fas fa-sign-out-alt"></i></button>
                    </div>
                </div>
                
    </div>

    <!-- Body Section -->

    <div class = "donor-info-box">
        <span id="ask-question"> Are you sure this donor has donated ? If not then you can <a href="record.php"> go back </a> and search again.</span>
        <div class="donor-info">
                <!-- PHP code to get selected donor infomartion -->
                <?php

                $phoneno = $_POST['phonenumber'];
                $bloodgroup = $_POST['bloodgroup'];

                $query = "SELECT * FROM donor where status = true and `blood group`='$bloodgroup' and `phone number` = '$phoneno' " ;
                $data = mysqli_query($conn , $query) ;
                $row = mysqli_fetch_assoc($data);
                if($row!=0)
                {
                ?>

                <table>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><?php echo $row['name'] ; ?></td>
                </tr>
                <tr>
                    <td>Blood Group </td>
                    <td>:</td>
                    <td><?php echo $row['blood group'] ; ?></td>
                </tr>
                <tr>
                    <td>Phone number</td>
                    <td>:</td>
                    <td><?php echo $row['phone number'] ; ?></td>
                </tr>
                <tr>
                    <td>State </td>
                    <td>:</td>
                    <td><?php echo $row['state'] ; ?></td>
                </tr>
                <tr>
                    <td>District</td>
                    <td>: </td>
                    <td><?php echo $row['district'] ; ?></td>
                </tr>
                <tr>
                    <td>City / Village</td>
                    <td>: </td>
                    <td><?php echo $row['city / village'] ; ?></td>
                </tr>
                <tr>
                    <td>Last Donated : </td>
                    <td>: </td>
                    <td><?php echo $row['last donated'] ; ?></td>
                </tr>
            </table>
            <br><br>
            <form action="" method="post">
                <input type="checkbox" required> Agree all terms and conditions.
                <br><br>
                <input type="submit" name="submit" value="Update Donor Record">
            </form>

            <?php

            }
            else
            {
                echo "Ops ! No record found. Please go back and search again. " ;
            }
            ?>                



        </div>

    </div>

            <!-- Footer -->
    <div class="footer">
            | <a href="about.html" target="_Blank">About</a>
            | <a href="privacy.html" target="_Blank">Privacy Policy</a>
            | <a href="terms.html" target="_Blank">Terms</a>
            | <a href="cookies.html" target="_Blank">Cookies Policy</a>
            | <a href="help.html" target="_Blank">Help</a>
            | ShareBlood &copy; 2019 |
    </div>
</body>
</html>