<?php

include'connect.php';

if(isset($_GET['button-login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password))
    {
        echo 'please enter the credentials'; 
    }
    else{

        $query = "select * from credentials where username='$username' ";
        $result = mysqli_query($con,$query);

        if($row = mysqli_fetch_assoc($result))
        {
           // $dbpass = $row['password'];
            header("location:display.php");

        }
        else{
            echo 'incorrect';
        }
    }
}


?>