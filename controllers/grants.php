<?php

class grants extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->render('grants/index');
    }
}
