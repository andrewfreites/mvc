<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
<?php
 require 'app/views/header.php';
?>
<div id="main">
    <h1><?php echo $this->message; ?></h1>
</div>
<?php
 require 'app/views/footer.php';
?>
</body>
</html>