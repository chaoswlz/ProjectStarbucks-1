<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of recipy
 *
 * @author lizewu
 */
class Detail extends Application{
    //put your code here
    function __construct()
    {
            parent::__construct();
    }
        
    
    public function detail($id)
    {
        $this->load->model('recipes');
            
        $this->data['pagebody'] = 'recipy_detail';
        $this->data['detail']= $this->recipes->getRecipe($id);
        $this->data['name'] = $this->recipes->getName($id);
        $this->render(); 
    }
}
