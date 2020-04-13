<?php
    session_start();
    session_unset();
    session_destroy(); 
    header('refresh:5;url=http://localhost/mvc/'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
<?php
 require 'app/libs/header.php';
?>
<p>It was a pleasure, thanks for visiting</p>
<?php
 require 'app/views/footer.php';
?>
</body>
</html>