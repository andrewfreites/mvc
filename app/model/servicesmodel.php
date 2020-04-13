<?php
session_start();
class servicesModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($data){
        try{
        $query= $this->db->connect()->prepare('INSERT INTO orders (product, date, cost) VALUES (:product, :date, :cost)');
        $query->execute(['product' => $data['product'], 'date' => $data['date'], 'cost' => $data['cost']]);
        return true;
        }catch(PDOException $e){
        return false;
        }
    }
}

?>