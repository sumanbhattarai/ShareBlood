<?php
error_reporting(0);
include('modules/connection.php');
include('modules/session.php') ;
            /* preventing file from direct access */
            if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
                /* 
                   Up to you which header to send, some prefer 404 even if 
                   the files does exist for security
                */
                header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        
                /* choose the appropriate page to redirect users */
                die( header( 'location: home.php' ) );
        
            }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donor List - Share Blood </title>
    <link rel="stylesheet" href="css/donorlist.css">
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

        <!-- Filter option -->
        <div class = "filter-box">
            <span id="filter-icon"> <i class="fas fa-sort"></i> </span>
            <span id="filter-text">Filter By </span>
            <span id="bloodgroup-text">Blood Group :</span>
            <input type="text" value="<?php echo $_POST['bloodgroup'] ?>" style="cursor: not-allowed; " readonly>
        </div>

        <!-- Donor list table -->
        <div class="donor-table">
            <table>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>State</th>
                    <th>District</th>
                    <th>City / Village</th>
                </tr>
                <?php
                $hospitalState = $result['state'];
                $hospitalDistrict = $result['district'];
                $hospitalCityVillage = $result['city / village'] ;
                $bloodGroup = $_POST['bloodgroup'];
                //$currentDate = date('Y-m-d');
                $query = "SELECT * FROM donor
                WHERE`blood group`='$bloodGroup' 
                and `status` is true 
                and state = '$hospitalState' 
                and district = '$hospitalDistrict' 
                and `city / village` = '$hospitalCityVillage' 
                and `ability` is true 
                order by rand()  " ;
                $data = mysqli_query($conn , $query) ;
                if (mysqli_num_rows($data) > 0) 
                {
                    $sn = 1 ;
                    while($row = mysqli_fetch_assoc($data)) 
                    {
                ?>

                <tr>
                    <td><?php echo $sn ; ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['phone number'] ?></td>
                    <td><?php echo $row['state'] ?></td>
                    <td><?php echo $row['district'] ?></td>
                    <td><?php echo $row['city / village'] ?></td>
                </tr>

                <?php
                    $sn = $sn + 1 ;
                    }
                } 
                // else 
                // {
                //     echo "No results" ;
                // }
                


                ?>

            </table>

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
    <script src="js/donorlist.js"></script>






    
</body>
</html>