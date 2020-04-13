<?php
require_once 'app/controller/error.php';
class App{
    function __construct(){
        $url= isset($_GET['url']) ? $_GET['url']:null;
        $url= rtrim($url,'/');
        $url= explode('/',$url);
        // undefined controller access
        if (empty($url[0])){
            $fileController= 'app/controller/main.php';
            require_once $fileController;
            $controller= new Main;
            $controller->loadModel('main');
            $controller->render();
            return false;
        }
        $fileController= 'app/controller/'. $url[0] . '.php';
        if(file_exists($fileController)){
            require_once $fileController;
            //initialize controller
            $controller= new $url[0];
            $controller->loadModel($url[0]);
            //if need to load a method (class function)
            if(isset($url[1])){
                $controller->{$url[1]}();
            } else{
                $controller->render();
            }
        }else{
            $controller= new Fail();
        }
    }
}

?>