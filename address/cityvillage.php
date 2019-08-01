<?php
include('../connection.php');

$districtid = $_POST['datapost'] ;

$query = "SELECT * from `city / village` where district_id ='$districtid' " ;
$result = mysqli_query($conn , $query);

while($rows = mysqli_fetch_array($result))
    {
    ?>
    <option value=""><?php echo $rows['name'];  ?></option>
    <?php
    }
    ?>
?>