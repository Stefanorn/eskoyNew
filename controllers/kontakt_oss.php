<?php

class kontakt_oss extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){
        $jsonData = file_get_contents('Public/Kontakt-oss.json');
        $json = json_decode($jsonData, true);
        $this->view->siteData = $json;
        $this->view->bannerImages = array(  'fisktjenestebanner1.jpeg',
        'fisktjenestebanner3.JPG', 'fisktjenestebanner4.JPG' );
        $this->view->renderSite();
    }
}