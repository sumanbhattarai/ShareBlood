
<?php

$donatedDate = strtotime("2019-07-15") ; // making string to time format
$now = time() ; // getting current time
echo $now."<br>";
echo $donatedDate."<br>" ;

$no_of_days = round(($now - $donatedDate)/86400); // converting seconds to days and rounding it off.
echo $no_of_days ; // printing



?>