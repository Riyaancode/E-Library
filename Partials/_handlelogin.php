<?php/*

if($_SERVER['REQUEST_METHOD'] == "POST"){
    include "_dbconnect.php";
    $email = $_POST['loginemail'];
    $pass = $_POST['loginpass'];
    //$hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "SELECT *from users where user_email = '$email' ";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($result);
    if($numrows==1){
        $row = mysqli_fetch_assoc($result);

        if(password_verify($pass, $row['user_pass'])){
           
            echo "login";
           // header("Location: /ForumWeb/index.php");
        }
        else{
           echo "unable to login";
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['useremail'] =  $email;
            echo "loggedin". $email;
           header("Location: /ForumWeb/index.php");
        }
    }
    else{
        echo "failed";
    }
}
else{
    echo "not post";
}

$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['loginemail'];
    $pass = $_POST['loginpass'];

    $sql = "Select * from users where user_email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['user_pass'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] = $row['sno'];
            $_SESSION['useremail'] = $email;
            echo "logged in". $email;
        } 
        else{
            echo "error";
        }
        //header("Location: //index.php");  
    }
   // header("Location: /ForumWeb/index.php");  
}*//*
$email = $_POST['user_email'];
echo"$email";
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['user_email'];
    $pass = $_POST['user_pass'];

    $sql = "SELECT * FROM `users` WHERE user_email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['user_pass'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] = $row['sno'];
            $_SESSION['user_email'] = $email;
            echo "logged in". $email;
        } else{
            echo 'not login';
        }
        header("Location: /E-Library/index.php");  
    } else{
        echo 'not login';
    }
    header("Location: /E-Library/index.php");  
}else{
    echo 'not login';
}

*/

$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include "Partials/_dbconnect.php"; 
    $username = $_POST["username"];
    $password = $_POST["loginpass"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "SELECT *FROM users WHERE user_email='$email' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['user_pass'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: welcome.php");
            } 
            else{
                $showError = "Invalid Credentials";
            }
        }
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
} else{
    $showError = "Invalid Credentials";
}
    

?>