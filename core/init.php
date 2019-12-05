<?php

spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});

?>

<section class="content">
    <?php 
       if(isset($_GET["content"])){
           include("./includes/" .$_GET["content"] . ".php");
       }else{
           include("./includes/home.php");
       }
       ?>
</section>
