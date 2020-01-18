<?php
require_once "./core/db/connectdb.php";
require_once "./core/db/functions.php";
require_once './core/init.php';




$firstname = sanitize($_POST["firstname"]);
$infix = sanitize($_POST["infix"]);
$lastname = sanitize($_POST["lastname"]);
$email = sanitize($_POST["email"]);
$phone = sanitize($_POST["phone"]);
$address = sanitize($_POST["address"]);
$zipcode = sanitize($_POST["zipcode"]);
$city = sanitize($_POST["city"]);
$username = sanitize($_POST["username"]);
$password = sanitize($_POST["password"]);

$sql = "SELECT * FROM `user` WHERE `email` = '$email'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 1 ){
    echo '<div class="alert alert-danger" role="alert">
    Dit email bestaat al probeer het opnieuw.</div>';
    echo '<meta http-equiv="Refresh" content="2; ./index.php?content=register")'; 
} else {

    
    

$sql = "INSERT INTO `user`      (`userid`, 
                                `firstname`, 
                                `infix`, 
                                `lastname`,
                                `email`,
                                `phone`,
                                `address`,
                                `zipcode`, 
                                `city`, 
                                `password`, 
                                `role`, 
                                `employeeid`, 
                                `username`) 
                      
                      VALUES   (NULL, 
                                '$firstname', 
                                '$infix', 
                                '$lastname',
                                '$email',
                                '$phone',
                                '$address',
                                '$zipcode', 
                                '$city',
                                '$password', 
                                'klant', 
                                '0', 
                                '$username')";
//echo $sql;
$result = mysqli_query($con,$sql);

$id = mysqli_insert_id($con);

echo '<div class="alert alert-succes" role="alert">
    bedankt voor het registreren, u wordt doorgestuurd naar de inlog pagina.</div>';
    echo '<meta http-equiv="Refresh" content="2; ./index.php")';
}