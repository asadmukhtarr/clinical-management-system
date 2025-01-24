<?php
    $email = $_GET['email']; // for get email ..
    $password = $_GET['password']; // for password ..
    include('cn.php'); // for connection ...
    $query = "SELECT * FROM `users` WHERE email='$email' AND password ='$password'";
    $result = mysqli_query($connection,$query) or die('cant run query for login');
    $rows = mysqli_num_rows($result); // couting number of rows against this data ..
    if($rows > 0){
        $data = mysqli_fetch_array($result);
        // sessoins .. ak 
        // cookies ...  
        session_start(); // start session ..
        $_SESSION['user'] = $data['name']; //key ...
        header('Location:../home.php');
    } else {
        $warning = "Email or password does not exist";
        header('Location:../index.php?asad='.$warning);
    }
?>