<?php
class Services extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('services/index');
    }
    function orderService(){
        echo "Register done";
        $this->model->insert();

    }
}
?>