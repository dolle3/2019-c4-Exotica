<?php
session_start();

// initializing variables
$username = "";
$email = "";
$phone = "";
$address = "";
$zipcode = "";
$city = "";
$infix = "";
$lastname = "";
$role = "";


$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', ' ', 'exotica');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['firstname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $infix = mysqli_real_escape_string($db, $_POST['infix']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $phone = mysqli_real_escape_string($db, $_POST['tel']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $zipcode = mysqli_real_escape_string($db, $_POST['postcode']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $role = mysqli_real_escape_string($db, $_POST['role']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) {
        array_push($errors, "gebruikersnaam is verplicht");
    }
    if (empty($email)) {
        array_push($errors, "Email is verplicht");
    }
    if (empty($lastname)) {
        array_push($errors, "achternaam is verplicht");
    }
    if (empty($address)) {
        array_push($errors, "adres is verplicht");
    }
    if (empty($zipcode)) {
        array_push($errors, "postcode is verplicht");
    }
    if (empty($city)) {
        array_push($errors, "stad is verplicht");
    }
    if (empty($password_1)) {
        array_push($errors, "wachtwoord is verplicht");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "de twee wachtwoorden komen niet over een.");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE firstname='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['firstname'] === $username) {
            array_push($errors, "gebruikersnaam is al in gebruik");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email is al in gebruik");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO `users` (`iduser`, `firstname`, `infix`, `lastname`, `email`, `phone`, `address`, `postcode`, `city`, `password`, `role`, `specialty`) VALUES (NULL, '$username', '$infix', '$lastname', '$email', '$phone', '$address', '$zipcode', '$city', '$password', '$role', '-')";
        mysqli_query($db, $query);
        $_SESSION['firsname'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['firstname']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "gebruikersnaam is verplicht");
    }
    if (empty($password)) {
        array_push($errors, "wachtwoord is verplicht");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE firstname='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['firstname'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            array_push($errors, "verkeerde gebruikersnaam/wachtwoord combinatie");
        }
    }
}
