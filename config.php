<?php

    $conn= mysqli_connect("sql.freedb.tech","freedb_FluxUser","Tq6f$4C85?y$3pu","freedb_FluxFitDB","3306");
    if($conn){
        print("connected db");
    }else{
        die("error");
    }

?>