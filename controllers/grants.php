<?php

class grants extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->bannerImages = array(  'tilskuddbanner1.JPG',
        'tilskuddbanner2.JPG', 'tilskuddbanner3.jpeg' );
        $this->view->render('grants/index');
    }
}
