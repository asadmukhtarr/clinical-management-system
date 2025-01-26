<?php
    $id = $_GET['id']; // getting id through parameter ..
    $name  = $_POST['name']; // name ..
    $email = $_POST['email']; // email ..
    $whatsapp = $_POST['whatsapp']; // whatsapp ..
    $gender = $_POST['gender']; // gender ..
    include('cn.php'); // connection ..
    $query = "UPDATE `users` SET name='$name',email='$email',whatsapp='$whatsapp',gender='$gender' WHERE id='$id'";
    mysqli_query($connection,$query) or die('cant run query');
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>