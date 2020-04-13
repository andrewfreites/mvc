<?php
if(isset($_SESSION['role'])){
switch($_SESSION['role']){
        case 1:
            require 'app/views/header-client.php';
        break;
        case 2:
            require 'app/views/header-manager.php';
        break;
        case 3:
            require 'app/views/header-admin.php';
        break;
        default:
            require 'app/views/header.php';
    }
} else{
    require 'app/views/header.php';
}
?>