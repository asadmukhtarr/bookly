<?php
    $name = $_POST['name']; // name ..
    $email = $_POST['email']; // email  ..
    $username = $_POST['username']; // user name ..
    $password = $_POST['password']; // password ..
    $confirm_password = $_POST['confirm_password']; // confirm password ..
    if($password == $confirm_password){
        // connection ..
       include('cn.php');
    //    $query = "INSERT INTO ``";
        echo 'Password is same';
    } else {
        echo 'pass is not same';
    }
?>