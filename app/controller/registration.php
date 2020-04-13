<?php
session_start();
Class Registration extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->message="";
    }
    function render(){
        $this->view->render('registration/index');
    }
    function signup(){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
        $birthday=$_POST['birthday'];
        $role=1;
        if($this->model->check(['email' => $email])){
            $message="Email already exist";
        } else{
            if($this->model->insert(['name' =>$name, 'email'=>$email, 'password'=>$password,'birthday'=>$birthday])){
                $message="Successful registration";
                $_SESSION['register']=true;
                $url=constant('URL')."login";
                header("location: $url");
            }
        }
        $this->view->message=$message;
        $this->render();
    }
}
?>