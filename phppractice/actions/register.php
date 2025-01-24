<?php
    $name  = $_POST['name']; // name ..
    $email = $_POST['email']; // email ..
    $whatsapp = $_POST['whatsapp']; // whatsapp ..
    $gender = $_POST['gender']; // gender ..
    $password = $_POST['password']; // passowrd ..
    $cpassword = $_POST['cpassword']; // confirm password ..
    // for match passowrd ..
    if($password == $cpassword){
        include_once('cn.php'); // connection ..
        $sql = "SELECT * FROM `users` WHERE email = '$email'";
        $result = mysqli_query($connection,$sql) or die('cant run query while checking email');
        $rows = mysqli_num_rows($result);
        if($rows > 0){
            $warning = "Email Already Exist";
            header('Location:../register.php?asad='.$warning);
        } else {
             // query for insert data into database ..
            $query = "INSERT INTO `users`(name,email,whatsapp,gender,password) VALUES ('$name','$email','$whatsapp','$gender','$password')";
            mysqli_query($connection,$query) or die('cant run query');
            header("Location:../register.php?success='User Created Sucesfully'");
        }
    } else {
        $warning = "Password did not match";
        header('Location:../register.php?asad='.$warning);
    }
?>