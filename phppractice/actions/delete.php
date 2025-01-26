<?php
    $id = $_GET['id']; // getting id ..
    include('cn.php'); // location ..
    $sql = "SELECT * FROM `users` WHERE id='$id'";
    $result = mysqli_query($connection,$sql) or die('cant run query for fetch user');
    $rows = mysqli_fetch_array($result);
    $name = $rows['name']; // name ..
    $query = "DELETE FROM `users` WHERE id='$id'";
    mysqli_query($connection,$query) or die('cant run query');
    $warning = $name." Deleted Succesfully";
    header('Location:../home.php?asad='.$warning);
?>