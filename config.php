<?php
    $conn = new mysqli("localhost", "root", "root1", "cart_system");
    if ($conn->connect_error){
        die ("Verbinding mislukt" . $conn->connect_error);
    }

?>