<?php

    setcookie("user_id", "", time() - 3600);
    setcookie("user_name", "", time() - 3600);

    echo "<script>alert('Logout successful');</script>";

    sleep(3); 

    header("Location: /views/users/login.php");
    exit();


?>