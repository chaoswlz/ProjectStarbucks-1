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
	 */
	public function index()
	{
		$this->data['pagebody'] = 'welcome_message';
		$this->render(); 
	}
        
        function counte($goods){
            $this->load->model('recipes');
            $this->load->model('inventories');

            foreach($this->recipes->all() as $detail){
                if($detail['menu'] == $goods){
                    foreach ($this->inventories->all() as $item) {
                        if($item['name'] == $detail['item']){
                            $all = intval($item['quantity']);
                            $each = intval($detail['quantity']);
                            $rest = $all % $each;
                            $counter[] = ($all - $rest)/ $each;
                        }
                    }   
                }
            }    
            return min($counter);   
    }
}
