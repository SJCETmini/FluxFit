<?php

include '../../config.php';

/*
function UserReg($email,$name,$password,){
    $hashed_pass=password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (email, name, password) VALUES ('$email', '$name', '$hashed_pass')";

    if (mysqli_query($conn, $sql)) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
    */

// if(isset($_POST['signup'])){
//    $name=$_POST['name'];
//    $email=$_POST['email'];
//    $password=$_POST['password'];
   
//    $hashed_pass=password_hash($password, PASSWORD_DEFAULT);
//     $sql = "INSERT INTO users (email, name, password) VALUES ('$email', '$name', '$hashed_pass')";

//     if (mysqli_query($conn, $sql)) {
//         //echo "User registered successfully!";
//         echo "<script>alert('User registered successfully!');</script>";
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }
//     header("Location: /views/users/login.php");
// }

if(isset($_POST['adminlogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT id, name, password FROM admins WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];
        
        if (password_verify($password, $hashed_password)) {
            setcookie("admin_id", $row['id'], time() + (86400 * 30), "/");
            setcookie("admin_name", $row['name'], time() + (86400 * 30), "/"); 
            
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

