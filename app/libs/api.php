<?php
    require_once '../model/blogmodel.php';
    if (isset($_GET['action']) && isset($_GET['page'])){
        $news= new blogModel();
        $page =(int)$_GET['page'];
        $data = $news->getData($page);
        echo json_encode($data);
    } else{
        echo "not get action and page";
    }
?>
