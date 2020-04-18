<?php
class Blog extends Controller{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->render('blog/index');
    }
    function scroll(){ //this is the api that I try to use
    if (isset($_GET['action']) && isset($_GET['page'])){
        $news= new blogModel();
        $page =(int)$_GET['page'];
        $data = $news->getData($page);
        echo json_encode($data);
        $this->render();
    }
    }
}
?>