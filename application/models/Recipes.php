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
            array('id' => '1', 'menu' => 'Caramel Macchiato', 'item' => 'Milk', 'Quantity' => '2'),
            array('id' => '2', 'menu' => 'Caramel Macchiato', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '3', 'menu' => 'Cappuccino', 'item' => 'Milk', 'Quantity' => '3'),
            array('id' => '4', 'menu' => 'Cappuccino', 'item' => 'Brewed Espresso','Quantity' => '1'),
            array('id' => '5', 'menu' => 'Caramel Macchiato', 'item' => 'Vanilla Syrup', 'Quantity' => '1'),
            array('id' => '6', 'menu' => 'Caramel Macchiato', 'item' => 'Caramel Sauce', 'Quantity' => '1'),
            array('id' => '7', 'menu' => 'Latte', 'item' => 'Milk', 'Quantity' => '1'),
            array('id' => '8', 'menu' => 'Latte', 'item' => 'Brewed Espresso', 'Quantity' => '2'),
            array('id' => '9', 'menu' => 'Mocha', 'item' => 'Whipped Cream', 'Quantity' => '1'),
            array('id' => '10', 'menu' => 'Mocha', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '11', 'menu' => 'Mocha', 'item' => 'Mocha Sauce', 'Quantity' => '1'),
            array('id' => '12', 'menu' => 'Pumpkin Spice Latte', 'item' => 'Milk', 'Quantity' => '1'),
            array('id' => '13', 'menu' => 'Pumpkin Spice Latte', 'item' => 'Pumpkin Spice Sauce', 'Quantity' => '1'),
            array('id' => '14', 'menu' => 'Pumpkin Spice Latte', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '15', 'menu' => 'Pumpkin Spice Latte', 'item' => 'Whipped Cream', 'Quantity' => '1'),
            array('id' => '16', 'menu' => 'Pumpkin Spice Latte', 'item' => 'Pumpkin Spice Topping', 'Quantity' => '1'),
            array('id' => '17', 'menu' => 'White Chocolate Mocha', 'item' => 'Milk', 'Quantity' => '1'),
            array('id' => '18', 'menu' => 'White Chocolate Mocha', 'item' => 'White Chocolate Mocha Sauce', 'Quantity' => '1'),
            array('id' => '19', 'menu' => 'White Chocolate Mocha', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '20', 'menu' => 'White Chocolate Mocha', 'item' => 'Whipped Cream', 'Quantity' => '1')
            
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





