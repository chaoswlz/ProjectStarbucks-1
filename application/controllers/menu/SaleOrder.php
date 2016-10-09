<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SaleOrder extends Application{
    function __construct(){
        parent::__construct();
    }
    
    public function index($item){
        $this->findSpecific($item);
    }
    
    public function findSpecific($item){
        
        // load models
        $this->load->model('recipes');
        $this->load->model('inventories');
        $this->load->model('menus');
        $counter = array();

        $target = preg_replace("/[\s-&]/", "", $item);

        // calculate sotck
        foreach($this->recipes->all() as $detail){
            $orgin = preg_replace("/[\s&-]/", "", $detail['menu']);
            
            if($orgin == $target){
                foreach ($this->inventories->all() as $i) {
                    if($i['name'] == $detail['item']){
                        $all = intval($i['quantity']);
                        $each = intval($detail['Quantity']);
                        $rest = $all % $each;
                        $counter[] = ($all - $rest)/ $each;
                    }
                }  
            }
        }
        
        // call this body view
        $this->data['pagebody'] = 'sales_order';
        
        $source = $this->menus->find($item);
        
        // pass data to view
        $this->data = array_merge($this->data, $source);
        $this->data['rest'] = min($counter);
        
        $this->render();
    }
}
