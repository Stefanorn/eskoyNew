<?php

class fish_service extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->bannerImages = array(  'fisktjenestebanner1.jpeg',
        'fisktjenestebanner3.JPG', 'fisktjenestebanner4.JPG' );
        $this->view->render('fish_service/index');
    }
}
