<?php

class bootstrap {
    private $_url = null;
    private $_controller = null;
    function __construct(){

        //Set the url
        $this->_getUrl();

        // load default controller if no url is set
        if(empty($this->_url[0])){
            $this->_loadDefaultController();
            return false;
        }
        $this->_loadExistingContoller();

        $this->_callControllerMethod();


    }

    private function _getUrl(){

        $url = isset($_GET['url']) ? $_GET['url'] : null ;
        $url = rtrim( $url ,'/');
        $url = filter_var( $url, FILTER_SANITIZE_URL);

        $this->_url = explode('/', $url);

    }
    private function _loadDefaultController(){
        require 'controllers/index.php';
        $this->_controller = new index();
        $this->_controller->index();
    }

    private function _loadExistingContoller(){
        $file = 'controllers/' . $this->_url[0] . '.php';

        if(file_exists($file)){
            require $file;
            $this->_controller = new $this->_url[0]; 
            $this->_controller->loadModel($this->_url[0]); 
        }
        else{
            $this->_error();
        }
    }

        /**
     * If a method is passed in the GET url paremter
     * 
     *  http://localhost/controller/method/(param)/(param)/(param)
     *  url[0] = Controller
     *  url[1] = Method
     *  url[2] = Param
     *  url[3] = Param
     *  url[4] = Param
     */
    private function _callControllerMethod()
    {
        $length = count($this->_url);
        
        // Make sure the method we are calling exists
        if ($length > 1) {
            if (!method_exists($this->_controller, $this->_url[1])) {
                $this->_error();
            }
        }
   
        // Determine what to load
        switch ($length) {
            case 5:
                //Controller->Method(Param1, Param2, Param3)
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]);
                break;
            
            case 4:
                //Controller->Method(Param1, Param2)
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3]);
                break;
            
            case 3:
                //Controller->Method(Param1, Param2)
                $this->_controller->{$this->_url[1]}($this->_url[2]);
                break;
            
            case 2:
                //Controller->Method(Param1, Param2)
                $this->_controller->{$this->_url[1]}();
                break;
            
            default:
                $this->_controller->index();
                break;
        }
    }


    private function _error(){
        require 'controllers/error1.php';
        $controller = new Error1();
        $controller->index();
        return false;
    }
}