<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
<?php
 require 'app/libs/header.php';
?>
<form action="<?php echo constant('URL');?>registration/signup" method="post">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name">
    <label for="email">Email: </label>
    <input type="email" name="email" id="email">
    <label for="birthday">Birthday: </label>
    <input type="date" name="birthday" id="birthday">
    <label for="password">Password: </label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Sign in">
</form>
<?php
echo $this->message;
?>
<?php
 require 'app/views/footer.php';
?>
</body>
</html>