<?php require_once "./connectdb.php" ?>
<?php require_once "./core/server.php" ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="header">
    <h2>Login</h2>
</div>

<form method="post" action=".././login-script.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>gebruikersnaam
            <input type="text" name="username">
        </label>
    </div>
    <div class="input-group">
        <label>wachtwoord
            <input type="password" name="password">
        </label>
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
        Not yet a member? <a href="blank.php?content=register">Sign up</a>
    </p>
</form>
</body>
</html>