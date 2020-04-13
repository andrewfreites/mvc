<?php
class Main extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->message=null;
    }
    function render(){
        $this->view->render('main/index');
    }
}
?>