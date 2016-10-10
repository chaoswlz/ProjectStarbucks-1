<?php

/**
 * @author Daniel Zhang
 */
class Inventories extends CI_Model {
    // ingredents data
    var $data = array(
        array('id' => '1', 'name' => 'Milk', 'quantity' => '1000'),
        array('id' => '2', 'name' => 'Ice', 'quantity' => '1000'),
        array('id' => '3', 'name' => 'Sugar', 'quantity' => '1000'),
        array('id' => '4', 'name' => 'Water', 'quantity' => '1000'),
        array('id' => '5', 'name' => 'Banana', 'quantity' => '1000'),
        array('id' => '6', 'name' => 'Blueberry', 'quantity' => '1000'),
        array('id' => '7', 'name' => 'Apple', 'quantity' => '1000'),
        array('id' => '8', 'name' => 'Grape', 'quantity' => '1000'),
        array('id' => '9', 'name' => 'Orange', 'quantity' => '1000'),
        array('id' => '10', 'name' => 'Coconut Milk', 'quantity' => '1000'),
        array('id' => '11', 'name' => 'Honey', 'quantity' => '1000'),
        array('id' => '12', 'name' => 'Lime Refresher Base', 'quantity' => '1000'),
        array('id' => '13', 'name' => 'Berry Refresher Base', 'quantity' => '1000'),
        array('id' => '14', 'name' => 'Classic Syrup', 'quantity' => '1000'),
        array('id' => '15', 'name' => 'An Infusion Of', 'quantity' => '1000'),
        array('id' => '16', 'name' => 'Mocha Sauce', 'quantity' => '1000'),
        array('id' => '17', 'name' => 'Whipped Cream', 'quantity' => '1000'),
        array('id' => '18', 'name' => 'Vanilla Syrup', 'quantity' => '1000'),
        array('id' => '19', 'name' => 'Chili Mocha Powder', 'quantity' => '1000'),
        array('id' => '20', 'name' => 'Spiced Mocha Topping', 'quantity' => '1000'),
        array('id' => '21', 'name' => 'Toffee Nut Syrup', 'quantity' => '1000'),
        array('id' => '22', 'name' => 'Caramel Sauce', 'quantity' => '1000'),
        array('id' => '23', 'name' => 'Sea Salt Topping', 'quantity' => '1000'),
        array('id' => '24', 'name' => 'Caramelized Honey Sauce', 'quantity' => '1000'),
        array('id' => '25', 'name' => 'Caramelized Honey Topping', 'quantity' => '1000'),
        array('id' => '26', 'name' => 'White Chocolate Mocha Sauce', 'quantity' => '1000'),
        array('id' => '27', 'name' => 'Cinnamon Dolce Syrup', 'quantity' => '1000'),
        array('id' => '28', 'name' => 'Cinnamon Dolce Topping', 'quantity' => '1000'),
        array('id' => '29', 'name' => 'Protein And Fiber Powder', 'quantity' => '1000'),
        array('id' => '30', 'name' => 'Strawberry Base', 'quantity' => '1000'),
        array('id' => '31', 'name' => 'Plain nonfat greek yogurt', 'quantity' => '1000'),
        array('id' => '32', 'name' => 'Cherry compote', 'quantity' => '1000'),
        array('id' => '33', 'name' => 'Almond granola', 'quantity' => '1000'),
        array('id' => '34', 'name' => 'Granola', 'quantity' => '1000'),
        array('id' => '35', 'name' => 'Ginger Ale Fizzio Base', 'quantity' => '1000'),
        array('id' => '36', 'name' => 'Lemon Ale Fizzio Base', 'quantity' => '1000'),
        array('id' => '37', 'name' => 'Orange Cream Fizzio Base', 'quantity' => '1000'),
        array('id' => '38', 'name' => 'Coconut Milk', 'quantity' => '1000'),
        array('id' => '39', 'name' => 'Brewed Espresso', 'quantity' => '1000'),
    );

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // retrieve a single inventory by passing id
    public function get($which)
    {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
                if ($record['id'] == $which)
                        return $record;
        return null;
    }

    // retrieve all of the inventories
    public function all()
    {
        return $this->data;
    }        
    
    // retrieve one single inventory by passing name
    public function getInventory($which){
            $source = array();
            $name = $this->getName($which);
            // iterate over the data until we find the one we want
            foreach ($this->data as $record){
                if ($record['name'] == $name){
                    $source[] = $record;
                }
            }
            return $source;
	}
    
    // retrieve one inventory name 
    public function getName($which){
        // iterate over the data until we find the one we want
        $href = preg_replace("/[-]/", " ", $which);
        foreach ($this->data as $record){
            if ($record['name'] == $href){
                return $record['name'];
            }
        }
        return null;
    }
}