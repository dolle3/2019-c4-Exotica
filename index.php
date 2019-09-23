<?php
require_once 'core/init.php';

$lars = new User('kees', '1');

echo 'de naam is: ' .$lars->getUsername(). '<br>';
echo 'het id is: ' .$lars->getId(). '<br>';