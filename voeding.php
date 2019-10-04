<!doctype html>
<html lang="nl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Mijn Eigein css-->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <!-- Google fonts--> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap" rel="stylesheet">

    <!-- Winkelmaand icontje-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Exotica</title>
  </head>
  <body>
<section id="nav-bar" >
        <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="#top"><img src="./img/exo-logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>

                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="reptielen.php">REPTIELEN</a>
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
        <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Geen account? Maak een account aan</a>
      </div>
      
    </form>
    
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>