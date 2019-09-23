<?php
    date_default_timezone_set("Asia/Kathmandu");
    include("connection.php");

    //to get the current date and time.
    $currentDate = date("Y-m-d H:i:s");

    $sql = "SELECT id , `date` , `time` from bloodrequests " ;
    $data = mysqli_query($conn , $sql) ;
    if(mysqli_num_rows($data)>0)
    {
        while($row = mysqli_fetch_assoc($data))
        {
            $id = $row['id'];
            $date = $row['date'];
            $time = $row['time'];
            $postDate = $date." ".$time ;
            if($postDate < $currentDate)
            {
                $query = "UPDATE bloodrequests SET `status` = 0 WHERE `id` = $id " ;
                mysqli_query($conn , $query);
            }
            else
            {
                $query = "UPDATE bloodrequests SET `status` = 1 WHERE `id` = $id " ;
                mysqli_query($conn , $query);
            }
        }
    }
    



?>