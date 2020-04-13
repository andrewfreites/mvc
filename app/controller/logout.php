<?php
class Logout extends Controller{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->render('logout/index');
    }
}
?>