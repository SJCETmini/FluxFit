<?php

include '../../config.php';



if(isset($_POST['addEnterprise'])){
    $gymName = $_POST['gymName'];
    $address = $_POST['address'];
    $membershipFee = (int) $_POST['membershipFee'];
    $monthlyFee = (int) $_POST['monthlyFees'];
    $startingTime = $_POST['startingtime'];
    $closingTime = $_POST['closingtime'];
    $description = $_POST['gymDescription'];

    $workingHours = $startingTime . " - " . $closingTime;
    $ownerName = isset($_GET['name']) ? $_GET['name'] : 'Guest';
    $ownerId = isset($_GET['id']) ? $_GET['id'] : null;
    $dailyFee = $monthlyFee / 20;

    
    $sql = "INSERT INTO gyms (name, address, description, membership_fee, monthly_fee, daily_fee, working_hours, ownerId)
            VALUES ('$gymName', '$address', '$description', '$membershipFee', '$monthlyFee', '$dailyFee', '$workingHours', '$ownerId')";
 
    if (mysqli_query($conn, $sql)) {
        echo "Gym registered successfully!";
        header("Location: /views/gym-owner/owner-dashboard.php?name=$ownerName&id=$ownerId");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
 }






if(isset($_POST['signup'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   
   $hashed_pass=password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO owners (email, name, password) VALUES ('$email', '$name', '$hashed_pass')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Owner registered successfully!');</script>";
        header("Location: /views/gym-owner/login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
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
            $owner_name = $row['name'];
            $owner_id = $row['id'];
            header("Location: /views/gym-owner/owner-dashboard.php?name=$owner_name&id=$owner_id");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email address.";
    }
    
    //header("Location: /views/gym-owner/owner-dashboard.php");
}
?>


