<?php 

if(isset($_POST['login']))
        {
            $email = $_POST['email'] ;
            $password = $_POST['password'] ;
            $query = " SELECT * FROM hospital WHERE email='$email' && password='$password' " ;
            $data = mysqli_query($conn , $query) ;
            $total = mysqli_num_rows($data) ;
            if($total !=0)
            {
                $_SESSION['email'] = $email ; 
                header('location:home.php');
            }
            else
            {
                echo "* Invalid Email or Password" ;
            }
        }


?>