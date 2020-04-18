<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
<?php
 require 'app/libs/header.php';
?>
<p>Blog</p>
<div id="news"></div>
<div id="more-news"></div>
<script src="<?php echo constant('URL');?>public/js/blog.js"></script>
<?php
 require 'app/views/footer.php';
?>
</body>
</html>