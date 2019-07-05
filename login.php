
<?php

$email= "abc@gmail.com" ;
$pass = "asd" ;

if(isset($_POST['submit']))
{
    if($_POST['email']==$email && $_POST['password']==$pass)
    {
        echo " Sucess" ;
    }
    else
    {
        echo " Invalid " ;
    }
}

?>