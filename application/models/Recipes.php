<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author jim
 */
class Recipes extends CI_Model {

	// The data comes from http://www.quotery.com/top-100-funny-quotes-of-all-time/?PageSpeed=noscript
	var $data = array(
            array('id' => '1', 'menu' => 'Green Tea', 'item' => 'Tea Powder', 'Quantity' => '1'),
            array('id' => '2', 'menu' => 'Green Tea', 'item' => 'Water', 'Quantity' => '5'),
            array('id' => '3', 'menu' => 'Green Tea', 'item' => 'Honney', 'Quantity' => '1'),
            array('id' => '4', 'menu' => 'Black Coffee', 'item' => 'Coffee puree','Quantity' => '2'),
            array('id' => '5', 'menu' => 'Black Coffee', 'item' => 'water', 'Quantity' => '3'),
            array('id' => '6', 'menu' => 'Coffee', 'item' => 'Coffee puree', 'Quantity' => '1'),
            array('id' => '7', 'menu' => 'Coffee', 'item' => 'Water', 'Quantity' => '2'),
            array('id' => '8', 'menu' => 'Coffee', 'item' => 'Milk', 'Quantity' => '2'),
            array('id' => '9', 'menu' => 'Coffee', 'item' => 'Sugar', 'Quantity' => '2')
	);

	// Constructor
	public function __construct(){
            
            parent::__construct();
	}

	// retrieve a single quote
	public function get($which)
	{
            // iterate over the data until we find the one we want
            foreach ($this->data as $record){
                    if ($record['id'] == $which){
                            return $record;
                    }
            }
            return null;
	}

	// retrieve all of the quotes
	public function all()
	{
            return $this->data;
	}
       
  	public function getRecipe($which){
            $recipy = array();
            $name = $this->getName($which);
            // iterate over the data until we find the one we want
            foreach ($this->data as $record){
                if ($record['menu'] == $name){
                    $recipy[] = $record;
                }
            }
            return $recipy;
	}
        
        public function getName($which){
           
            // iterate over the data until we find the one we want
            foreach ($this->data as $record){
                if ($record['id'] == $which){
                    return $record['menu'];
                }
            }
            return null;
	}
        
        public function names(){
           $name = array();
            // iterate over the data until we find the one we want
            foreach ($this->data as $record){
                if (!in_array($record['menu'], $name)){
                    $names[] = array('id' => $record['id'], 'name' => $record['menu']);
                    $name[] = $record['menu'];
                }
            }
            
            
            return $names;
	}
  
}





