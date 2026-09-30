<?php
    ob_start(); // Starts output buffering
    session_start();

    date_default_timezone_set("Africa/Abidjan"); // Sets the correct timezone

    $con = mysqli_connect("127.0.0.1", "root", "", "slotify", 3307 ); // XAMPP MariaDB on 3307 (MySQL80 service holds 3306)


    // Proper error handling
    if(mysqli_connect_errno()){
        echo "Failed to connect : " . mysqli_connect_errno();
    }
    
?>

