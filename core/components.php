<?php

class components{

    public function loadComponents($componentName){
        require 'components/'.$componentName.'.php';
    }

}