<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inventory
 *
 * @author Daniel Zhang
 */
class Single extends Application{
    //put your code here
    function __construct()
    {
            parent::__construct();
    }
    
    public function detail($name)
    {       
        $this->load->model('inventories');
        $this->load->model('recipes');
        
        $recipe = array();


        foreach($this->recipes->all() as $source) {
            if($source['item'] == $name){
                $recipe[] = $source;
            }
        }   

        $this->data['Recipe'] = $recipe;
        $this->data['pagebody'] = 'inventory_recipe';
        $this->data['Ingredents']= $this->inventories->getInventory($name);
        $this->render(); 
    }
}