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
              <a class="navbar-brand" href="index.php"><img src="./img/exo-logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>

                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="dieren.php">DIEREN</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="voeding.php">VOEDING</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="aquariums.php">AQUARIUMS</a>
                    </li>
                      
                      <li class="nav-item">
                            <button type="button" onclick="document.getElementById('modal-wrapper1').style.display='block'"  id="footer1">AFSPRAAK MAKEN</button>
                            
                      </li>
                      <li class="nav-item">
                            <button type="button" onclick="document.getElementById('modal-wrapper2').style.display='block'"  id="footer1">LOGIN</button>
                            
                      </li>
                      <li class="nav-item">
                      <a href="checkout.php"> <i class="fa fa-shopping-bag fa-2x fa-flip-horizontal" style="color:#ff914d"></i> <span id="cart-item" class="badge badge-danger"><b>1</b></span></a>
                    </li>
                  </ul>
                </div>
              </nav>

              <div id="modal-wrapper1" class="modal">
  
   
          
  <div class="imgcontainer">
    <span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close" title="Close PopUp">&times;</span>
    <img src="./img/avatar.png" alt="Avatar" class="avatar">
    <h1 class="title" style="text-align:center">Afspraak portal</h1>
  </div>


  <div class="container">
  <form class="modal-content animate" method="post" action="index.php" name="loginform">

    <input type="text" id="login_input_username" placeholder="Gebruikersnaam" class="login_input" name="user_name" required/>
    <input type="password" id="login_input_password" class="login_input" placeholder="Wachtwoord" name="user_password" autocomplete="off" required />        
    <button type="submit" class="button2"class= "btn btn-primary">Login</button>     
    <a href="register.php" >Geen account? <b>Maak gratis een account aan</b></a>
  </div>
  
</form>

</div>

<div id="modal-wrapper2" class="modal">


      
  <div class="imgcontainer">
    <span onclick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close PopUp">&times;</span>
    <img src="./img/avatar.png" alt="Avatar" class="avatar">
    <h1 class="title" style="text-align:center">Login Portal</h1>
  </div>


  <div class="container">
  <form class="modal-content animate" method="post" action="index.php" name="loginform">

    <input type="text" id="login_input_username" placeholder="Gebruikersnaam" class="login_input" name="user_name" required/>
    <input type="password" id="login_input_password" class="login_input" placeholder="Wachtwoord" name="user_password" autocomplete="off" required />        
    <button type="submit" class="button2"class= "btn btn-primary">Login</button>     
    <a href="register.php" >Geen account? <b>Maak gratis een account aan</b></a>
  </div>
  
</form>

</div>

<section id="shop">
<div class="container text-center">
<h1 class="title">VOEDING</h1>
<div class="row text-center" >

</div>
</div>
</div>


</div>

</div>
</section>

<img src="img/myimage.png" class="bottom-img">


<section id="diensten">
  <div class="container text-center">
  <div class="row text-center" >
  <div class="col-sm-12 col-md-3 p-3 services">
  <div class="card" style="width: auto;">
  <img src="img/voeding/Reptielenvoeding.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Natural Iguana food 13,5kg</h5>
    <h3>€ 100,-</h3>
    <a href="#" id="footer1" class="btn btn-primary">IN WINKELWAGEN</a>
  </div>
</div>
  </div>
  <div class="col-sm-12 col-md-3 p-3 services">
  <div class="card" style="width: auto;">
  <img src="img/voeding/Reptielenvoeding.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gouden gekko (Gecko Auratus)</h5>
    <h3>€ 20,-</h3>
    <a href="#" id="footer1" class="btn btn-primary">IN WINKELWAGEN</a>
  </div>
</div>
      
      </div>
  <div class="col-sm-12 col-md-3 p-3 services">
  <div class="card" style="width: auto;">
  <img src="img/voeding/Reptielenvoeding.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Stekelnekagaam (Acanthosaura capra)</h5>
    <h3>€ 30,-</h3>
    <a href="#" id="footer1" class="btn btn-primary">IN WINKELWAGEN</a>
  </div>
</div>
      </div>
  
      <div class="col-sm-12 col-md-3 p-3 services">
  <div class="card" style="width: auto;">
  <img src="img/voeding/Reptielenvoeding.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Steppevaraan (Varanus Exanthematicus)</h5>
    <h3>€ 60,-</h3>
    <a href="#" id="footer1" class="btn btn-primary">IN WINKELWAGEN</a>
  </div>
</div>
      
      </div>
      <div class="col-sm-12 col-md-3 p-3 services">
  <div class="card" style="width: auto;">
  <img src="img/voeding/Reptielenvoeding.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Panterkameleon (Furcifer Pardalis)</h5>
    <h3>€ 150,-</h3>
    <a href="#" id="footer1" class="btn btn-primary">IN WINKELWAGEN</a>
  </div>
</div>
      
      </div>
      <div class="col-sm-12 col-md-3 p-3 services">
  <div class="card" style="width: auto;">
  <img src="img/voeding/Reptielenvoeding.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Panterkameleon (Furcifer Pardalis)</h5>
    <h3>€ 150,-</h3>
    <a href="#" id="footer1" class="btn btn-primary">IN WINKELWAGEN</a>
  </div>
</div>
      
      </div>

      <div class="col-sm-12 col-md-3 p-3 services">
  <div class="card" style="width: auto;">
  <img src="img/voeding/Reptielenvoeding.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Panterkameleon (Furcifer Pardalis)</h5>
    <h3>€ 150,-</h3>
    <a href="#" id="footer1" class="btn btn-primary">IN WINKELWAGEN</a>
  </div>
</div>
      
      </div>

      <div class="col-sm-12 col-md-3 p-3 services">
  <div class="card" style="width: auto;">
  <img src="img/voeding/Reptielenvoeding.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Panterkameleon (Furcifer Pardalis)</h5>
    <h3>€ 150,-</h3>
    <a href="#" id="footer1" class="btn btn-primary">IN WINKELWAGEN</a>
  </div>
</div>
      
      </div>
  
  </div>


    </div>
  </div>
</div>

</div>
</section>

<img src="img/image.png" class="bottom-img">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>