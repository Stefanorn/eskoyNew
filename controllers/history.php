<?php

class history extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->bannerImages = array(  'historyBanner1.jpeg',
        'historyBanner2.jpeg' );
        $this->view->render('history/index');
    }
}