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
        <li><a href="<?php echo constant('URL');?>manage-orders" id="manage-orders">Orders</a></li>
        <li><a href="<?php echo constant('URL');?>manage-payments" id="manage-payments">Payments</a></li>
        <li><a href="<?php echo constant('URL');?>manage-services" id="manage-services">Services</a></li>
        <li><a href="<?php echo constant('URL');?>manage-tickets" id="manage-tickets">Support Tickets</a></li>
        <li><a href="<?php echo constant('URL');?>manage-users" id="manage-users">Users</a></li>
        <li><a href="<?php echo constant('URL');?>main/logout" id="logout">Salir</a></li>     
    </ul>
    </nav>
</header>
<script src="<?php echo constant('ACTIVE'); ?>"></script>
</body>
</html>