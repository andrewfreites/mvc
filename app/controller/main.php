<?php
class Main extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->message=null;
    }
    function render(){
        if (!isset($_SESSION)){
            session_start();
        }
        $this->view->render('main/index');
    }
    function logout(){
        session_start();
        session_unset();
        session_destroy(); 
        $this->render();
    }
}
?>