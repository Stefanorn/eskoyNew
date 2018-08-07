<?php

class history extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){
        
        $jsonData = file_get_contents('public/sitedata.json');
        $json = json_decode($jsonData, true);
        $this->view->siteData = $json;
        $this->view->bannerImages = array(  'historyBanner1.jpeg',
        'historyBanner2.jpeg' );
     
        $this->view->renderSite();
    }
}