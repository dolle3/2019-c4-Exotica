<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="header">
    <h2>Register</h2>
</div>

<form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Username
            <input type="text" name="firstname" value="<?php echo $username; ?>">
        </label>
    </div>
    <div class="input-group">
        <label>Email
            <input type="email" name="email" value="<?php echo $email; ?>">
        </label>
    </div>
    <div class="input-group">
        <label>phone
            <input type="tel" name="tel" value="<?php echo $phone; ?>">
        </label>
    </div>
    <div class="input-group">
        <label>
            <input type="text">
        </label>
    </div>
    <div class="input-group">
        <label>Password
            <input type="password" name="password_1">
        </label>
    </div>
    <div class="input-group">
        <label>Confirm password
            <input type="password" name="password_2">
        </label>

    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
</form>
</body>
</html>