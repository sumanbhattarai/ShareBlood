<?php
include('modules/connection.php');
    if(!isset($_POST['submit'])) {
        header("Location: editDonor.php");
    } else {

        $phone = $_POST['phonenumber'];
        
        $sql = "SELECT * FROM donor WHERE `phone number` = '$phone';";
        $data = mysqli_query($conn,$sql);
        $result = mysqli_fetch_assoc($data);
        $total = mysqli_num_rows($data);

        if($total == 0) {
            header("Location: editDonor.php?phone=notMatched");
            exit();
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/editDonorProcess.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Philosopher" rel="stylesheet">
</head>
<body>
     <!-- NarBar-->
     <div class = "nav" >
            <img src = "images/trans.png">
            <span id="shareblood">ShareBlood</span>
    </div>

    <!-- Body Section -->
    <div class="main-box">
    <i class="fas fa-user-edit" id="edit-icon"></i> 
    Update your information !
               <form action="editDonorSuccess.php" method="post">
                   <br><br>
                   <input type="text" name="id" value="<?php echo $result['id']; ?>" style="display:none ;">
                   <input type="text" name = "fullname" value="<?php echo $result['name'] ; ?>" onkeypress="submitBtn()"> <br><br>
                   <input type="text" name = "phonenumber" value="<?php echo $result['phone number'] ; ?>" onkeypress="submitBtn()" > <br><br>
                   <select name="state" id="state" onchange="submitBtn()">
                       <option value="" disabled >State</option>
                       <option value="4" <?php if($result['state']==4) echo "selected" ?>>4</option>
                   </select>
                   <select name="district" id="district" onchange="submitBtn()">
                       <option value="" disabled >District</option>
                       <option value="Kaski" <?php if($result['district']=='Kaski') echo "selected" ?>>Kaski</option>
                   </select><br><br>
                   <select name="city-village" id="city-village" onchange="submitBtn()">
                       <option value="" disabled>City / Village</option>
                       <option value="Pokhara" <?php if($result['city / village']=='Pokhara') echo "selected" ?>>Pokhara</option>
                   </select>
                   <br><br>
                   <select name="bloodgroup" id="blood-group" class="round" onchange="submitBtn()" >
                       <option value="" disabled >Select your Blood Group</option>
                       <option value="A+" <?php if($result['blood group']=='A+') echo "selected" ?>>A+</option>
                       <option value="A-" <?php if($result['blood group']=='A-') echo "selected" ?>>A-</option>
                       <option value="B+" <?php if($result['blood group']=='B+') echo "selected" ?>>B+</option>
                       <option value="B-" <?php if($result['blood group']=='B-') echo "selected" ?>>B-</option>
                       <option value="O+" <?php if($result['blood group']=='O+') echo "selected" ?>>O+</option>
                       <option value="O-" <?php if($result['blood group']=='O-') echo "selected" ?>>O-</option>
                       <option value="AB+" <?php if($result['blood group']=='AB+') echo "selected" ?>>AB+</option>
                       <option value="AB-" <?php if($result['blood group']=='AB-') echo "selected" ?>>AB-</option>
                   </select>
                   <br><br>
                   <input type="submit" name="updateDonor" value="Update" id="update-btn" class="submit-btn active" disabled>
                </form>


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

    <!-- JavaScript -->
    <script src="js/editDonorProcess.js"></script>
    
</body>
</html>