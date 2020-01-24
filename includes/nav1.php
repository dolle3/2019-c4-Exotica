<section id="nav-bar" >
        <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="index.php"><img src="img/exo-logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>

                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?content=dieren">DIEREN</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?content=voeding">VOEDING</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?content=aquariums">AQUARIUMS</a>
                    </li>

                      <li class="nav-item">
                            <button type="button" onclick="window.location.href='index.php?content=agenda'"  id="footer1">AFSPRAAK MAKEN</button>

                      </li>
                      <li class="nav-item">
                            <button type="button" onclick = "window.location.href='index.php?content=log-out'"  id="footer1">LOGOUT</button>
                            
                      </li>
                      <li class="nav-item">
                      <a href="index.php?content=cart"> <i class="fa fa-shopping-bag fa-2x fa-flip-horizontal" style="color:#ff914d"></i> <span id="cart-item" class="badge badge-danger"><b></b></span></a>
                    </li>
                  </ul>
                </div>
              </nav>
              <div id="modal-wrapper1" class="modal">



  <div class="imgcontainer">
    <span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close" title="Close PopUp">&times;</span>
    <img src="img/avatar.png" alt="Avatar" class="avatar">
    <h1 class="title" style="text-align:center">Afspraak portal</h1>
  </div>


  <div class="container">
  <form class="modal-content animate" method="post" action="index.php?content=login-script-2" name="loginform" id="afspraak">

    <input type="text" id="login_input_username" placeholder="username" class="username" name="username" required/>
    <input type="password" id="login_input_password" class="password" placeholder="password" name="password" autocomplete="off" required />
    <button type="submit" class="button2"class= "btn btn-primary">Login</button>
    <a href="blank.php?content=register" >Geen account? <b>Maak gratis een account aan</b></a>
  </div>

</form>

</div>

<div id="modal-wrapper2" class="modal">



  <div class="imgcontainer">
    <span onclick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close PopUp">&times;</span>
    <img src="img/avatar.png" alt="Avatar" class="avatar">
    <h1 class="title" style="text-align:center">Login Portal</h1>
  </div>


  
  <form class="modal-content animate" method="post" action="index.php?content=log-out" name="loginform">

<section id="shop">
<div class="container text-center">
<div class="row text-center" >

</div>
</div>
</div>


</div>

</div>

</section>