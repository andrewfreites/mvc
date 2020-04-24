<?php
class Blog extends Controller{ 
    //Controller owns a database constructor
    function __construct(){
        parent::__construct();
    }
    function render(){
        //I need to render here the query result
        $this->view->render('blog/index');
    }
}
?>