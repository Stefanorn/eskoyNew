<?php

class view{
    function __construct(){
    }
    public function render($name){
        require 'views/header.php'; 
        require 'views/banner.php'; //hér þarf ég að geta sent inn myndir eða eitthvað
        require 'views/' . $name . '.php';
        require 'views/fooder.php';
    }
}