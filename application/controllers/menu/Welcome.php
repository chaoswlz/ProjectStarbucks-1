<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application{
    function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->load->model('menus');
        
        $this->data['pagebody'] = 'menu';
        
        $source = $this->menus->all();
        
        //$menu = array();
        $drink = array();
        $food = array();
        
        foreach($source as $s){
            if($s['type'] == "drink"){
                $drink[] = array('name' => $s['name'], 'price' => $s['price'], 'href' => $s['href']);
            }else if($s['type'] == "food"){
                $food[] = array('name' => $s['name'], 'price' => $s['price'], 'href' => $s['href']);
            }
        }
        
        $this->data['drink'] = $drink;
        $this->data['food'] = $food;
        
        $this->render();
    }
}
