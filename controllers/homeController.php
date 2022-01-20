<?php

class homeController extends controller{

    /*url/home OR url/*/
    public function index(){

        $this->loadView('home',[
            'name' => 'Vanderson Tiago'
        ]);

    }

    /*
        Se criar uma action além da index neste controller em especifico, para usar você precisa colocar 'home'
        na frente do nome da action, tipo: urlBase/home/test
        usei como exemplo a action 'test' abaixo
    */
    public function test(){

        $this->loadTemplate('example', 'test');

    }

}