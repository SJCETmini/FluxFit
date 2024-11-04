<?php

    $conn= mysqli_connect("sql.freedb.tech","freedb_FluxUser","Tq6f$4C85?y$3pu","freedb_FluxFitDB","3306");
    if($conn){
        //print("connected db");


    }else{
        echo "<script>alert('Database connection error!');</script>";
        die("error");
    }


    function login($email, $paasword){

        $sql = "SELECT password FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Fetch the hashed password from the database
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];
    
            // Verify the password
            if (password_verify($password, $hashed_password)) {
                // If the password inputs matched the hashed password in the database
                echo "Login successful!"; // You can redirect the user or set session variables here
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that email address.";
        }


    }



?>