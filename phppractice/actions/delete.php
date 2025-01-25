<?php
    $id = $_GET['id']; // getting id ..
    include('cn.php'); // location ..
    $query = "DELETE FROM `users` WHERE id='$id'";
    mysqli_query($connection,$query) or die('cant run query');
    $warning = "User Deleted Succesfully";
    header('Location:../home.php?asad='.$warning);
?>