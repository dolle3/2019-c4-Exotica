<?php
function sanitize($raw_data) {
    global $con;
    $data = htmlspecialchars($raw_data);
    $data = mysqli_real_escape_string($con, $data);
    return $data;
}
?>