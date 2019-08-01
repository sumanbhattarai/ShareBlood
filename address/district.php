<?php
include('../connection.php');

$stateid = $_POST['datapost'] ;

$query = "SELECT * from district where state_id ='$stateid' " ;
$result = mysqli_query($conn , $query);

while($rows = mysqli_fetch_array($result))
    {
    ?>
    <option value="<?php echo $rows['id'];  ?>"><?php echo $rows['name'];  ?></option>
    <?php
    }
    ?>
?>