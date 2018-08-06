<?php

class our_ship extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->bannerImages = array(  'skipbanner1.jpeg',
        'skipbanner3.jpeg', 'skipbanner2.jpeg' );
        $this->view->render('our_ship/index');
    }
}