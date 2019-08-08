
<?php

$donatedDate = strtotime("2019-07-15") ; // making string to time format
$now = time() ; // getting current time
$dateDiff  = $now - $donatedDate ; // subtracting two dates
$no_of_days = round($dateDiff/86400); // converting seconds to days and rounding it off.
echo $no_of_days ; // printing

?>