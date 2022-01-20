<?php

class galleryController extends controller{

    public function index(){

        $this->loadView('gallery');

    }

    public function abrir($id){
        
        $this->loadView('gallerySingle',['id'=>$id]);

    }

}