<?php

class jobs extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->bannerImages = array(  'jobbbanner1.jpeg',
        'jobbbanner2.jpeg' );
        $this->view->render('jobs/index');

    }
}
