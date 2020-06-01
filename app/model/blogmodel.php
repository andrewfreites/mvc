<?php
session_start();
class blogModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function getData($section){
        try{
            $query=$this->db->connect()->prepare('SELECT * FROM news LIMIT :section,2');
            $query->execute(['section' => $section]);
            $result=[];
            $items=[];
            if($query->rowCount()>0){
                while($row=$query->fetch(PDO::FETCH_ASSOC)){
                $item= Array(
                    'title' => $row['title'],
                    'text' => $row['text'],
                    'date' => $row['date'],
                    'author' => $row['author'],
                    'image' => $row['image']
                );
                array_push($items, $item);
                }
                array_push($result, Array('response' => "200"), $items, array('page' => ($section + $query->rowCount())));
                return $result;
            } else{
                array_push($result, Array('response' => "400"));
                return $result;
            }
        } catch(PDOException $e){
            print_r('Error connection: '. $e->getMessage());
        }
    }
}
?>