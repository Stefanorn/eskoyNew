<?php

class history extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->render('history/index');
    }
}
