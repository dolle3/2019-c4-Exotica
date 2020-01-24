<?php
  session_unset();
  session_destroy();
  echo '<div class="alert alert-success" role="alert">
            U bent succesvol uitgelogd, u wordt doorgestuurd naar de algemene homepagina</div>';
            echo '<meta http-equiv="Refresh" content="2; ./index.php")';
?>