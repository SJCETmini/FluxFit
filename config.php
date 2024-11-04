<?php

    //$conn= mysqli_connect("sql.freedb.tech","freedb_FluxUser","Tq6f$4C85?y$3pu","freedb_FluxFitDB","3306");
    $conn= mysqli_connect("mysql-3c5572f9-naveenalex670-aef4.h.aivencloud.com","avnadmin","AVNS_SuJJ6VemDz_dNKbjzI9","fluxFit","27969");
    if($conn){
        //print("connected db");


    }else{
        echo "<script>alert('Database connection error!');</script>";
        die("error");
    }

/*
    //$hashed_pass=password_hash("admin", PASSWORD_DEFAULT);
    $sql = "DELETE FROM gyms WHERE id = 2;";

    if (mysqli_query($conn, $sql)) {
        //echo "User registered successfully!";
        echo "<script>alert('User registered successfully!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
        */
/*
    $sql = "CREATE TABLE admins (
        id INT AUTO_INCREMENT PRIMARY KEY,
        uname VARCHAR(255),
        password VARCHAR(255)
    )";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Table 'admins' created successfully.";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
*/



?>