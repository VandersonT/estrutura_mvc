<?php

class controller extends components{
    
 
    public function loadView($viewName,$data = array()){

        require 'views/'.$viewName.'.php';

    }

    public function loadTemplate($templateName,$viewName,$data = array()){
        require 'templates/'.$templateName.'.php';
    }

}