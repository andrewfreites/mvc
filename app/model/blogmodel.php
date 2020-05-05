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
            $n=$query->rowCount();
            if($n){
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
                array_push($result, Array('response' => "200"));
                array_push($result, $items);
                array_push($result, Array('page' => ($section + $n)));
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