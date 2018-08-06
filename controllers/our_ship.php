<?php

class our_ship extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->render('our_ship/index');
    }
}
