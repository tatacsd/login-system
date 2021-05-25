<?php

session_start();
include "database_connection.php";

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
        // if there is an email and password
        // the auth.php will open
        $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
        $stmt ->execute([$email]);

        if($stmt->rowCount() === 1){
            $user = $stmt->fetch();

            $user_id = $user['id'];
            $user_email = $user['email'];
            $user_password = $user['password'];
            $user_full_name = $user['fullname'];

            // Check if typed email is equal to user email
            if($email === $user_email){
                // Check password
                if(password_verify($password, $user_password)){
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['user_email'] = $user_email;
                    $_SESSION['user_fullname'] = $user_full_name;

                    header("Location: index.php"); 

                } else{
                    header("Location: login.php?error=Incorrect User or password"); 
                }

            } else{
                header("Location: login.php?error=Incorrect User or password"); 
            }

        } else {
            header("Location: login.php?error=Incorrect User or password");
        }
    }
}
?>