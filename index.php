<?php
require_once 'core/init.php';

$lars = new User('kees', '1');
$log = new Login('1', 'hasht',"hoi");

echo 'de naam is: ' .$lars->getUsername(). '<br>';
echo 'het id is: ' .$lars->getId(). '<br>';
echo 'dit is het Id: '.$log->getId(). ', Password: '.$log->getPassword().', de username is: ' .$lars->getUsername();