<?php

    //$conn= mysqli_connect("sql.freedb.tech","freedb_FluxUser","Tq6f$4C85?y$3pu","freedb_FluxFitDB","3306");
    $conn= mysqli_connect("mysql-3c5572f9-naveenalex670-aef4.h.aivencloud.com","avnadmin","AVNS_SuJJ6VemDz_dNKbjzI9","fluxFit","27969");
    if($conn){
        print("connected db");


    }else{
        echo "<script>alert('Database connection error!');</script>";
        die("error");
    }




?>