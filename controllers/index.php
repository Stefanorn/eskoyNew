<?php

class index extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->bannerImages = array(  'FrontPageImage4.jpg',
                                            'FrontPageImage1.jpg' );
        $this->view->render('index/index');
    }
}
