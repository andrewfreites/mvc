<?php
class Fail extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->message='Fail to load resource, this is a wrong directory';
        $this->view->render('error/index');
    }
}
?>