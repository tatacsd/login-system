<?php

// check if the field exist
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //if empty throw require
    if(empty($email)){
        header("Location: login.php?error=Email is required");
    } else if(empty($password)){
        header("Location: login.php?error=Password is required");
    } else {
        echo "Good!";
    }
}
?>