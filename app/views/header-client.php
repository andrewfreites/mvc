<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('CSS');?>">
    <title>header</title>
</head>
<body>
<header>
    <nav>
    <ul id="nav-bar">
        <li><a href="<?php echo constant('URL');?>index" id="index">Home</a></li>
        <li><a href="<?php echo constant('URL');?>services" id="services">Services</a></li>
        <li><a href="<?php echo constant('URL');?>blog" id="blog">Blog</a></li>
        <li><a href="<?php echo constant('URL');?>profile" id="profile">Profile</a></li>
        <li><a href="<?php echo constant('URL');?>about" id="about">About Us</a></li>
        <li><a href="<?php echo constant('URL');?>logout" id="logout">Salir</a></li>
    </ul>
    </nav>
</header>
<script src="<?php echo constant('ACTIVE'); ?>"></script>
</body>
</html>