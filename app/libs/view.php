<?php
class View{
    function __construct(){
    }
    function render($name){
        require 'app/views/'. $name . '.php';
    }
}
?>