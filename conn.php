<?php
    $conn = new mysqli("localhost", "b190920012", "UE8088b1c3d99", "b190920012");
    if($conn -> connect_error) {
        die("Connection failed: ". $conn -> connect_error);
    }
?>