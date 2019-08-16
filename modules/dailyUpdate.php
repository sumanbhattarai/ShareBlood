<?php

    include("connection.php");
    $sql = "SELECT id , `last donated` from donor where `last donated` is not null " ;
    $data = mysqli_query($conn , $sql) ;
    if(mysqli_num_rows($data)>0)
    {
        while($row = mysqli_fetch_assoc($data))
        {
            $pastDate = strtotime($row['last donated']);
            $currentDate = time();
            $diff = round(($currentDate  - $pastDate)/(60*60*24)) ;
            $id = $row['id'];
            if($diff < 90)
            {
                $query = "UPDATE donor set `ability` = false where id = $id ";
                mysqli_query($conn , $query);
            }
            else if ($diff > 90)
            {
                $query = "UPDATE donor set `ability` = true where id = $id ";
                mysqli_query($conn , $query);
            }
        }
    }
    



?>