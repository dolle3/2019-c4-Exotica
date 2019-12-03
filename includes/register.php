<?php require_once './core/init.php';
?>

  <div class="imgcontainer">
    <a href="../index.php"><span class="close" title="Close PopUp">&times;</span></a>
    <img src="../img/avatar.png" alt="Avatar" class="avatar">
    <h1 class="title" style="text-align:center">Gebruiker Registratie</h1>
  </div>


  <div class="container">
  <form class="modal-content animate" method="post" action="registration.php" name="loginform">

    <input type="text" id="login_input_firsrname" placeholder="Naam" class="login_input" name="firstname" required/>
    <input type="text" id="login_input_name" placeholder="Achternaam" class="login_input" name="name" required/>
    <input type="text" id="login_input_username" placeholder="Gebruikersnaam" class="login_input" name="username" required/>
    <input type="text" id="login_input_username" placeholder="E-mailadres" class="login_input" name="email" required/>
    <input type="password" id="login_input_password" class="login_input" placeholder="Wachtwoord" name="password" autocomplete="off" required />        
    <button type="submit" class="button2"class= "btn btn-primary">Registreren</button>

  </div> 

