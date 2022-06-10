<?php/*
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include "_dbconnect.php"; 
    $email = $_POST["loginemail"];
    $password = $_POST["loginpass"]; 
   
     $sql = "SELECT * from users where username='$email' AND password='$password'";

   // $sql = "SELECT *FROM users WHERE user_email ='$email' ";
   $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
           $pass = $row['user_email'];
            $row['user_email'];
        }
    }
}
            if (password_verify($password, $row['user_pass'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $email;
                header("location: welcome.php");
                exit();
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
    

*/

    $login = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include '_dbconnect.php';
        $email = $_POST["loginemail"];
        $password = $_POST["loginpass"]; 
        echo".$email.";
         
        $sql = "SELECT * from users where user_email='$email' AND user_pass='$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $email;
            header("location: welcome.php");
    
        } 
        else{
            $showError = "Invalid Credentials";
        }
    }




?>