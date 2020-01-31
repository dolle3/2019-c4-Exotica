<?php
require_once "./core/db/connectdb.php";
require_once "./core/db/functions.php";



$username = sanitize($_POST['username']);
$password = sanitize($_POST['password']);

if( !empty($username) && !empty($password)){

    
    
    
    $sql =   " SELECT * FROM `user` 
           WHERE `username`  = '$username' 
           ";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 1 ){
    $record = mysqli_fetch_assoc($result);
    
    $db_password = $record['password'];
    
    
    
    if ($password == $db_password){
        
        
        
        $_SESSION['username'] = $record['username'];
        $_SESSION['role'] = $record['role'];
        $_SESSION['userId'] = $record['userid'];
       
        



        
    switch($record['role']){

        case 'klant':
        echo '<div class="alert alert-success" role="alert">
        U ben ingelogd als klant, u wordt doorgestuurd naar de home pagina</div>';
        echo '<meta http-equiv="Refresh" content="2; url=./index.php">';
        break;
        default: 
        echo '<meta http-equiv="Refresh" content="2; url=./index.php">';
       
    }

    
}else{
    echo '<div class="alert alert-danger" role="alert">De door uw opgegeven e-mailadres en wachtwoord combinatie is niet bekend, probeer het opnieuw </div>';
    // header("Refresh: 4; url=./index.php?content=login");
    echo '<meta http-equiv="Refresh" content="2; url=blank.php?content=register">';
}

}else{
    echo '<div class="alert alert-danger" role="alert">Het door u opgegeven e-mailadres is niet bekend. probeer het opnieuw.</div>';
    // header("Refresh: 4; url=./index.php?content=login");
    echo '<meta http-equiv="Refresh" content="2; url=blank.php?content=register">';

}
}else{
    echo '<div class="alert alert-danger" role="alert">1 van uw velden is leeg.</div>';
    // header("Refresh: 4; url=./index.php?content=login&email=$email");
    echo '<meta http-equiv="Refresh" content="2; url=blank.php?content=register">';
}
?>