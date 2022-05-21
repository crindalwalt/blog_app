<?php

echo "<h1>Register Handler php</h1>";

//Post method
require "dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //data collection
    echo "form is submitted in post mode";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['pass1'];
    $cpassword = $_POST['pass2'];

    //cross-checking
    echo "$fname <br>$lname <br>$email<br>$username<br>$password<br>$cpassword";

    // checking for empty input
    $all_input_field = empty($fname) && empty($lname) && empty($email) && empty($username) && empty($password) && empty($cpassword);
    if (!$all_input_field) {


        //email checking
        $email_checking = "SELECT * FROM `users` WHERE `user_username`='$username'; ";
        $email_checking_run = mysqli_query($connection, $email_checking);
        $row = mysqli_num_rows($email_checking_run);
        if ($row < 1) {
            echo "username not existed good to go<br>";

            //password matching
            if ($password !== $password) {
                header('location:../register.php?pass=mismatch');
            } else {
                //password hashing
                $hashed = password_hash($password, PASSWORD_DEFAULT);
                echo "<br>$hashed";
                $insertion_query = "
            INSERT INTO `users` (`user_first_name`, `user_last_name`, `user_email`, `user_username`, `user_password`, `user_role`, `user_created`) VALUES ( '$fname', '$lname', '$email', '$username', '$hashed', '0', current_timestamp());
            ";
                $insertion_query_run = mysqli_query($connection, $insertion_query);
                if (!$insertion_query_run) {
                    echo "trouble creating your account";
                    header('location:../register.php?account=error');
                } else {
                    echo "account created";
                    header('location:../login.php?account=success');
                }
            }
        } else {
            echo "username already existed";
            header('location:../register.php?email=existed  ');
        }
    }else{
        header('location:../register.php?input=empty');
    }
}
