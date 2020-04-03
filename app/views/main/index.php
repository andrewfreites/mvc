<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de main</title>
</head>
<body>
<?php
 require 'app/views/header.php';
if (!isset($_SESSION['logged'])){
 include 'app/views/login/index.php';
}
?>

<?php
 require 'app/views/footer.php';
?>
</body>
</html>