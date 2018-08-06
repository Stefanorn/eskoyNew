<?php

class view{
    function __construct(){
    }
    public function render($name){
        require 'views/header.php'; 
        require 'views/banner.php'; 
        require 'views/' . $name . '.php';
        require 'views/fooder.php';
    }
    
}