<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="<?php echo constant('URL');?>login/login" method="post" id="login">
    <label for="email">Email: </label>
    <input type="email" name="email" id="email" size="12" required> 
    <label for="password">Password: </label>
    <input type="password" name="password" id="password" size="12" required>
    <input type="submit" value="Login">
    <a href="<?php echo constant('URL');?>registration">Sign Up</a>
    <a href="<?php echo constant('URL');?>passrecovery">Forget Password</a>
    <?php echo $this->message; ?>
</form>
</body>
</html>