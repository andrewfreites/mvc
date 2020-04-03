<?php
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
        case 1:
            header('location: http://localhost/mvc/consulta');
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