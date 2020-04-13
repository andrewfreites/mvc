<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
<?php
 require 'app/libs/header.php';
if (!isset($_SESSION['logged'])){
 include 'app/views/login/index.php';
}
?>
<p>Welcome to the index</p>
<?php
 require 'app/views/footer.php';
?>
</body>
</html>