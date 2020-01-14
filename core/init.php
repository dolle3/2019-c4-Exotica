<?php

spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});

?>

<section class="content">
    <?php 
       if(isset($_GET["content"])){
           require_once("./includes/" .$_GET["content"] . ".php");
       }else{
           require_once('./includes/home.php');
       }
       ?>
</section>
