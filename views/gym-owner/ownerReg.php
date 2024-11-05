<?php

include '../../config.php';

if(isset($_POST['signup'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   
   $hashed_pass=password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO owners (email, name, password) VALUES ('$email', '$name', '$hashed_pass')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Owner registered successfully!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location: /views/gym-owner/login.php");
}

if(isset($_POST['ownerLogin'])) {
    $email = $_POST['email1'];
    $password = $_POST['password1'];
    
    $sql = "SELECT id, name, password FROM owners WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];
        
        if (password_verify($password, $hashed_password)) {
            setcookie("owner_id", $row['id'], time() + (86400 * 30), "/");
            setcookie("owner_name", $row['name'], time() + (86400 * 30), "/"); 
            
            echo "Login successful!";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email address.";
    }
    header("Location: /views/gym-owner/owner-dashboard.php");
}
?>


