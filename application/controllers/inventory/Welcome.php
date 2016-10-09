<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/
     * 	- or -
     * 		http://example.com/welcome/index
     *
     * So any other public methods not prefixed with an underscore will
     * map to /welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     * 
     * 
    * @author Daniel Zhang
     */
    public function index()
    {
        // get the all the ingredents from out model
        $source = $this->inventories->all();
        
        $ingreds = array();
        
        // build an array of formatted cells for them
        foreach($source as $cell){
            $ingreds[] = array('id' => $cell['id'], 'name' => $cell['name'], 'quantity' => $cell['quantity']);
        }
        
        $this->data['ingreds'] = $ingreds;
        $this->data['pagebody'] = 'inventory';
        
        $this->render(); 
    }
        

}
