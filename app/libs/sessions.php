<?php
    if(isset($_SESSION['role'])){
        switch($_SESSION['role']){
        case 1:
            header('location: http://localhost/mvc/services');
        break;
        case 2:
            header('location: http://localhost/mvc/manager');
        break;
        case 3:
            header('location: http://localhost/mvc/admin');
        break;
        default:
        }
    }
?>