<?php
    echo "<h1>Login handler</h1><br><br>";
    if($_SERVER['REQUEST_METHOD']=='POST'){

        //including database integration
        include "dbconnection.php";

        //data collection;
        echo "==>   form is submitted as post request<br>";
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo "==> username ($username) ; password ($password)<br>";
        
        //checking for the user in the database
        $username_verification_q = "SELECT * FROM `users` WHERE `user_username`='$username'";
        $username_verification_q_run = mysqli_query($connection,$username_verification_q);
        $row_in_db = mysqli_num_rows($username_verification_q_run);
        if($row_in_db === 1){
            echo  "==>   ($row_in_db) entries found in the database<br>";


            //password verification
            while($entry = mysqli_fetch_assoc($username_verification_q_run)){
                
                
                //data collection
                $user_id = $entry['user_id'];
                $user_first_name = $entry['user_first_name'];
                $user_last_name = $entry['user_last_name'];
                $user_email = $entry['user_email'];
                $user_username = $entry['user_username'];
                $user_password = $entry['user_password'];
                
                //echoing user information
                echo "==>   <h3>User Information</h3><br>";
                echo "+     user id = $user_id<br> ";
                echo "+     user first name = $user_first_name<br> ";
                echo "+     user last name = $user_last_name<br> ";
                echo "+     user email = $user_email<br> ";
                echo "+     user username = $user_username<br> ";
                echo "+     user password = $user_password<br> ";


                //password decrypting
                $decrypt = password_verify($password,$user_password);
                if($decrypt){
                    echo "+    Password matched successfully<br>";

                    //starting a session
                    session_start();
                    $_SESSION['login'] = true;
                    $_SESSION['username'] = $user_username;
                    $_SESSION['first_name'] = $user_first_name;
                    $_SESSION['last_name'] = $user_last_name;
                    $_SESSION['last_email'] = $user_email;
                    header('location:../profile.php');

                }else{
                    echo "+    Password does not matched<br> ";

                }















                   //end of fetching loop
            }














            
        }else if($row_in_db < 1 ){
            echo  "==>   ($row_in_db) entries found in the database<br>";

        }else{
            echo "==>   record not found with this username<br>";
        }
















        //password decrypting
        $decrypt = password_verify($password,$hashed);


    }










?>