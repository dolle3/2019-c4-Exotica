<section id="nav-bar" >
        <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="#top"><img src="./img/exo-logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>

                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="reptielen.php">DIEREN</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="voeding.php">VOEDING</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="aquariums.php">AQUARIUMS</a>
                    </li>
                      
                      <li class="nav-item">
                            <button type="button" onclick="document.getElementById('modal-wrapper').style.display='block'"  id="footer1">AFSPRAAK MAKEN</button>
                            
                      </li>
                      <li class="nav-item">
                            <button type="button" onclick="document.getElementById('modal-wrapper').style.display='block'"  id="footer1">LOGIN</button>
                            
                      </li>
                      <li class="nav-item">
                    <i class="fa fa-shopping-bag fa-2x fa-flip-horizontal" style="color:#ff914d"></i>
                    </li>
                  </ul>
                </div>
              </nav>

<div id="modal-wrapper" class="modal">
  
   
          
      <div class="imgcontainer">
        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
        <img src="./img/avatar.png" alt="Avatar" class="avatar">
        <h1 class="title" style="text-align:center">Gebruiker Login</h1>
      </div>

  
      <div class="container">
      <form class="modal-content animate" method="post" action="index.php" name="loginform">

        <input type="text" id="login_input_username" placeholder="Gebruikersnaam" class="login_input" name="user_name" required/>
        <input type="password" id="login_input_password" class="login_input" placeholder="Wachtwoord" name="user_password" autocomplete="off" required />        
        <button type="submit" class="button2"class= "btn btn-primary">Login</button>     
        <a href="#" >Geen account? Maak een account aan</a>
      </div>
      
    </form>

    <?php


    ?>
    
  </div>

</section>