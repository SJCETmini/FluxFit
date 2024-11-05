<?php

include '../../config.php';


if(isset($_POST['signup'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   
   $hashed_pass=password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (email, name, password) VALUES ('$email', '$name', '$hashed_pass')";

    if (mysqli_query($conn, $sql)) {
        //echo "User registered successfully!";
        echo "<script>alert('User registered successfully!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location: /views/users/login.php");
}

if(isset($_POST['userLogIn'])) {
    $email = $_POST['email1'];
    $password = $_POST['password1'];
    
    $sql = "SELECT id, name, password FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];
        
        if (password_verify($password, $hashed_password)) {
            setcookie("user_id", $row['id'], time() + (86400 * 30), "/");
            setcookie("user_name", $row['name'], time() + (86400 * 30), "/"); 
            
            echo "Login successful!";
            header("Location: /views/users/dashboard.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email address.";
    }
}

if(isset($_POST['payment'])){

    $uid=$_COOKIE['user_id'];
    $gym_id=$_POST['gym_id'];
    
    $sql = "INSERT INTO memberships (uid, gym_id) VALUES ('$uid', '$gym_id')";

    if (mysqli_query($conn, $sql)) {
        //echo "User registered successfully!";
        echo "<script>alert('Payment successfull!');</script>";
        header("Location: /views/users/dashboard.php");
    } else {
        echo "<script>alert('Payment Error!');</script>";
        
    }

    
    

}


?>


