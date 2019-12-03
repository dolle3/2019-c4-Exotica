<?php

session_start();

$con = mysqli_connect('localhost', 'root', 'root1');

mysqli_select_db($con, 'user-registration');

$name = $_POST['username'];
$pass = $_POST['password'];

$s = "select * from usertable";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1 ){
    echo "Username is already taken";
} else{
    $reg = "insert into usertable (name, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "Registration is successful";
}

?>