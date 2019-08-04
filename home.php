
<?php
error_reporting(0);
include('modules/connection.php');
include('modules/session.php') ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - ShareBlood</title>
    <link rel="stylesheet" href="css/home.css">
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

    <!-- Profile Section -->
    <div class="profile-section">
        <div class="profile-picture profile-picture-onhover">
            <div class="change-pp"><i class="fas fa-camera" id="camera-icon" title="Change Profile Picture"></i></div>
            <img src="<?php echo $result['picture']; ?>" id="pp" alt="">
        
        </div>
        <!-- Button not displayed -->
        <form action="" method="POST" style="display:none ;" enctype="multipart/form-data" >
        <input type="file" id="upload-image" name="uploadimage" accept = "image/*" style="display:none ;"> 
        <input type="submit" name="submitimage" id="submit-image">
        </form>

        <!-- PHP code for image upload -->
        <?php
        include('modules/profileChange.php') ;
        ?>
        

        <span id="account-name"><?php  echo $result['name'] ;   ?></span>
        <div class="profile-info">
            <br><br><br>
             <i class="fas fa-mobile-alt"></i> <?php  echo $result['telephone'] ;   ?> <br> <br>
             <i class="fas fa-map-marker-alt"></i> <?php  echo 'State '.$result['state'].' - '.$result['district'].' - '.$result['city / village'] ;   ?> <br> <br>
             <i class="fas fa-envelope"></i> <?php echo $result['email'] ; ?> <br>
                <hr>
          
             Has someone donated blood ? Don't forget to register them here.
             <br> <br>
             <button >Keep Record</button>
        </div>
    </div>

    <div class="task-to-do">
        <div class="get-donor-list">
            <br><br>
            <form action="">
            <select name="" id="" class="round" required>
                       <option value="" disabled selected>Select Blood Group</option>
                       <option value="">A+</option>
                       <option value="">A-</option>
                       <option value="">B+</option>
                       <option value="">B-</option>
                       <option value="">O+</option>
                       <option value="">O-</option>
                       <option value="">AB+</option>
                       <option value="">AB-</option>
            </select>
            <br><br>

            <input type="submit" value = "Get the Donor List">


            </form>
            
    

        </div>

        <div class="post-blood-request">
        <br><br>
        <form action="" method="POST" onsubmit='return popup()'>
            <select name="bloodGroup" id="blood-group-for-posting" class="round" required>
                       <option value="" disabled selected>Select Blood Group</option>
                       <option value="A+">A+</option>
                       <option value="A-">A-</option>
                       <option value="B+">B+</option>
                       <option value="B-">B-</option>
                       <option value="O+">O+</option>
                       <option value="O-">O-</option>
                       <option value="AB+">AB+</option>
                       <option value="AB-">AB-</option>
            </select>
            <br><br>

            <input type="submit" name="postRequestSubmit" value = "Post Blood Request">


            </form>

        </div>

    </div>


    <!-- Pop Up box when post blood request button is clicked -->
    <div class = 'box-blood-request'>
        <div class='popup-blood-request'>
            <div><i class="fas fa-times-circle" id="close-btn"></i></div>
            <br>
            <form action="" method="POST" onsubmit="return postStatus();">
            <table>
                <tr>
                    <td>Hospital Name</td>
                    <td>:</td>
                    <td><input type="text" name="hospital-name" id="hospital-name" value= "<?php  echo $result['name']; ?> " style="cursor: not-allowed; " readonly></td>
                </tr>
                <tr>
                    <td>Hospital Telephone</td>
                    <td>:</td>
                    <td><input type="tel" id="hospital-telephone" name="hospital-telephone" value="<?php  echo $result['telephone']; ?>" style="cursor: not-allowed;" readonly></td>
                </tr>
                <tr>
                    <td>Hospital Address</td>
                    <td>:</td>
                    <td><input type="text" name="hospital-address" id="hospital-address" value="<?php  echo 'State '.$result['state'].' - '.$result['district'].' - '.$result['city / village']; ?>" style="cursor: not-allowed;" readonly></td>
                </tr>
                <tr>
                    <td>Patient Name</td>
                    <td>:</td>
                    <td><input type="text" name="patient-name" id="patient-name" placeholder = "Patient Name" required></td>
                </tr>
                <tr>
                    <td>Patient Age</td>
                    <td>:</td>
                    <td><input type="number" name="patient-age" id="patient-age" min='1' max='130' placeholder = "Patient Age" required></td>
                </tr>
                <tr>
                    <td>Blood Group Required</td>
                    <td>:</td>
                    <td><input type="text" name="blood-group" id="blood-group" style='cursor: not-allowed;' readonly></td>
                </tr>
                <tr>
                    <td>Need to get by</td>
                    <td>:</td>
                    <td> <input type="text" name="date" id="date" placeholder="Date" onfocus="(this.type='date')" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="text" name="time" id="time" placeholder="Time" onfocus="(this.type='time')" required></td>
                </tr>
                <tr>
                    <td>Pint of Blood Required</td>
                    <td>:</td>
                    <td><input type="number" id="pint-requred" name="pint-required" min="1" max="12" placeholder = "Amount of pint required" required></td>
                </tr>
                <tr>
                    <td>Cause of requirement</td>
                    <td>:</td>
                    <td><textarea name="cause" id="cause" cols="30" rows="10" required></textarea></td>
                </tr>
                <tr>
                    <td colspan = '3'><input type="submit" name="submit" value = "Post Blood Request"></td>
                </tr>
            </table>
               
            </form>

        </div>

    </div>

    <!-- Success box after post -->
    <div class="success-box">
        <div class="success-inner-box">
            <div class="success-content">
                <i class="fas fa-check-circle" id="tick-icon"></i>
                <span id="success-text">Sucessfully, posted !</span>
                <br><br>
                <button id="success-ok">OK</button>

            </div>
           
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


    <script src="js/home.js"></script>
    
</body>
</html>
