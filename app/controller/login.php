<?php
class Login extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->message="";
    }
    function render(){
        $this->view->render('main/index');
    }
    function login(){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $this->model->session(['email' => $email, 'password' =>$password]);
        $this->view->message=$this->model->message;
        $this->render();
    }
}
?>