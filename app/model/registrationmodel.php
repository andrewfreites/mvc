<?php
session_start();
class registrationModel extends Model{
    public function __construct()
    {
        parent::__construct();
        $this->message=null;
    }
    public function check($data){
        try{
            $query=$this->db->connect()->prepare('SELECT * FROM users WHERE email = :email');
            $query->execute(['email'=> $data['email']]);
            $row=$query->fetch(PDO::FETCH_OBJ);
            if ($row){
                return true;
            } else{
                return false;
            } 
        }catch(PDOException $e){
            //email query error
            echo "Error checking email: ";
            print_r('Error connection: '. $e->getMessage());
        }
    }
    public function insert($data){
        try{
        $insert=$this->db->connect()->prepare('INSERT INTO users (name, email, password, birthday, role) VALUES (:name, :email, :password, :birthday, 1)');
        $insert->execute(['name' =>$data['name'], 'email'=>$data['email'], 'password'=>$data['password'], 'birthday' =>$data['birthday']]);
        return true;
        } catch(PDOException $e){
            echo "INSERT error: ";
            //email query error
            print_r('Error connection: '. $e->getMessage());
        }
    }
}
?>