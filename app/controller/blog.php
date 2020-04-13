<?php
class Blog extends Controller{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->render('blog/index');
    }
}
?>