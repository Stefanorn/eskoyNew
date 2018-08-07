<?php

class our_ship extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){

        $jsonData = file_get_contents('Public/our-shipData.json');
        $json = json_decode($jsonData, true);
        $this->view->siteData = $json;
        $this->view->bannerImages = array(  'skipbanner1.jpeg',
        'skipbanner3.jpeg', 'skipbanner2.jpeg' );
        $this->view->renderSite();
    }
}