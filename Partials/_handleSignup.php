<?php
$showError='false';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include "_dbconnect.php";
    $name = $_POST['signupusername'];
    $email = $_POST['signupemail'];
    $pass = $_POST['signuppassword'];
    $cpass = $_POST['signupcpassword'];
    $existsusername = "select *from `users` where user_name='$name';";
    $result = mysqli_query($conn, $existsusername);
    $numrows= mysqli_num_rows($result);
    if($numrows>0){

            $showError="username already exists";
            
            
    }
        else{
            $existsemail = "SELECT *from `users` where user_email='$email'";
            $result = mysqli_query($conn, $existsemail);
            $numrows= mysqli_num_rows($result);
            if($numrows>0){
                $showError = "Email already exist";
                
            }
            else{
                if($pass == $cpass){
                    $hash = password_hash($pass, PASSWORD_DEFAULT);      
                    $sql =  "INSERT Into `users` (`user_name`, `user_email`, `user_pass`, `timestamp`) values ('$name', '$email', '$hash', current_timestamp())";
                    $result = mysqli_query($conn, $sql);
                    $showAlert = true;
                    header("location:/E-Library/Index.php?signup=success");
                    exit();
                }
            }
        }
    }

    header("location:/E-Library/Index.php?signup=failed&error=$showError");

?>