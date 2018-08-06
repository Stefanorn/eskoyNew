<?php

class Controller{
    function __construct(){
        
        $this->view = new view();


    }

    public function loadModel( $name ){
        $path = 'models/'. $name . '_model.php';
        if(file_exists($path)){
            require 'models'. $name . '_model.php';

            $modelName = $name . '_model.php';
            $this->model = new $modelName(); 
        }
        else{
            $this->view = new view(); 
        }
    }
}