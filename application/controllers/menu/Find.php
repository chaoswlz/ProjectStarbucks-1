<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Find extends Application{
    function __construct(){
        parent::__construct();
    }
    
    public function index($item){
        $this->find($item);
    }
    
    public function find($item){
        $this->load->model('menus');
        
        $this->data['pagebody'] = 'justone';
        
        $source = $this->menus->find($item);
        
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
}
