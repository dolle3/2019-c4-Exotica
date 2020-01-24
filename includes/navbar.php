<?php 
if (isset($_SESSION['username']))
{
  require_once './includes/nav1.php';
}else{
  require_once './includes/nav2.php';

}

?>

