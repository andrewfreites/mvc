<?php
class Services extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->message="";
    }
    function render(){
        $this->view->render('services/index');
    }
    function orderService(){
        $product=   $_POST['product'];
        $date=      $_POST['date'];
        $cost=      $_POST['cost'];
        if($this->model->insert(['product' => $product, 'date' => $date, 'cost' => $cost])){
            $message="New order created";
        } else{
            $message="Fail to create order";
        }
        $this->view->message= $message;
        $this->render();

    }
}
?>