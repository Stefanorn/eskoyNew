<?php

class error1 extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){

        $this->view->msg = 'the page doese not exist'; 
        $this->view->render('error/index');
    }
}
