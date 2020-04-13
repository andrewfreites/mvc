<?php
session_start();
class loginModel extends Model{
    public function __construct()
    {
        parent::__construct();
        $this->message=null;
    }
    public function session($data){
        try{
            $query=$this->db->connect()->prepare('SELECT * FROM users WHERE email = :email');
            $query->execute(['email'=> $data['email']]);
            $row=$query->fetch(PDO::FETCH_OBJ);
            if($row){
                if(password_verify($data['password'], $row->password)){
                    session_regenerate_id(true);
                    $_SESSION['logged'] = true;
                    $_SESSION['role']=$row->role;
                    $_SESSION['name']=$row->name; //used for a custom message or something else with user name
                    //needed to prevent session hijacking
                    $_SESSION['userAgent'] = $_SERVER['HTTP_USER_AGENT'];
                    $_SESSION['userIp'] = $_SERVER['REMOTE_ADDR'];
                    switch($_SESSION['role']){
                        case 1:
                            header('location: http://localhost/mvc/services');
                        break;
                        case 2:
                            header('location: http://localhost/mvc/manager');
                        break;
                        case 3:
                            header('location: http://localhost/mvc/admin');
                        break;
                        default:
                    }
                }else{
                    $message="wrong password";
                    $this->message=$message;
                }
            } else{
                $message="wrong email";
                $this->message=$message;
                }
            return true;
        }catch(PDOException $e){
            print_r('Error connection: '. $e->getMessage());
        }

    }
}
?>