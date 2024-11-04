<?php

include '../../config.php';


if(isset($_POST['adminlogin'])) {
    $uname = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT id, uname, password FROM admins WHERE uname='$uname'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];
        
        if (password_verify($password, $hashed_password)) {
            setcookie("admin_name", $row['uname'], time() + (86400 * 30), "/"); 
            
            echo "Login successful!";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No admin found with that email address.";
    }
    header("Location: /views/adminDash/admindashboard.php");
}
?>