
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
  
  
   
          
  <div class="imgcontainer">
    <a href="index.php"><span class="close" title="Close PopUp">&times;</span></a>
    <img src="./img/avatar.png" alt="Avatar" class="avatar">
    <h1 class="title" style="text-align:center">Gebruiker Registratie</h1>
  </div>


  <div class="container">
  <form class="modal-content animate" method="post" action="registration.php" name="loginform">

    <input type="text" id="login_input_firsrname" placeholder="Naam" class="login_input" name="firstname" required/>
    <input type="text" id="login_input_infix" placeholder="tussenvoegsel" class="login_input" name="infix"/>
    <input type="text" id="login_input_lastname" placeholder="Achternaam" class="login_input" name="lastname" required/>
    <input type="text" id="login_input_Email" placeholder="E-mailadres" class="login_input" name="email" required/>
    <input type="text" id="login_input_phone" placeholder="Telefoonnummer" class="login_input" name="phone" required/>
    <input type="text" id="login_input_addres" placeholder="Adres" class="login_input" name="address" required/>
    <input type="text" id="login_input_zipcode" placeholder="Postcode" class="login_input" name="zipcode" required/>
    <input type="text" id="login_input_city" placeholder="Stad" class="login_input" name="city" required/>
    <input type="text" id="login_input_username" placeholder="Gebruikersnaam" class="login_input" name="username" required/>
    <input type="password" id="login_input_password" class="login_input" placeholder="Wachtwoord" name="password" autocomplete="off" required />        
    <button type="submit" class="button2"class= "btn btn-primary">Registreren</button>

  </div> 
  






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

