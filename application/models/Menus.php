<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Menu
 *
 * @author TianyangLiu
 */
class Menus extends CI_Model{
    var $data = array(
        // drinks
        array('id' => '1', 'name' => 'Caramel Macchiato', 'type' => 'drink',
            'price' => '3.49', 'href' => '/Caramel-Macchiato', 'img' => 'assets/images/.jpg'),
        array('id' => '2', 'name' => 'Cappuccino', 'type' => 'drink',
            'price' => '3.99', 'href' => '/Cappuccino', 'img' => 'assets/images/cappuccino.jpg'),
        array('id' => '3', 'name' => 'Latte', 'type' => 'drink',
            'price' => '4.35', 'href' => '/Latte', 'img' => 'assets/images/'),
        array('id' => '4', 'name' => 'Caffè Mocha', 'type' => 'drink',
            'price' => '3.79', 'href' => '/Mocha', 'img' => 'assets/images/'),
        array('id' => '5', 'name' => 'Pumpkin Spice Latte', 'type' => 'drink',
            'price' => '4.99', 'href' => '/Pumpkin-Spice-Latte', 'img' => 'assets/images/'),
        array('id' => '6', 'name' => 'White Chocolate Mocha', 'type' => 'drink',
            'price' => '4.49', 'href' => '/White-Chocolate-Mocha', 'img' => 'assets/images/'),
        array('id' => '7', 'name' => 'Chocolate Mocha', 'type' => 'drink',
            'price' => '3.59', 'href' => '/Chocolate-Mocha', 'img' => 'assets/images/'),
        
        // food
        array('id' => '8', 'name' => 'Blueberry Bar', 'type' => 'food',
            'price' => '1.49', 'href' => '/Blueberry-Bar', 'img' => 'assets/images/.jpg'),
        array('id' => '9', 'name' => 'Chocolate Cake Pop', 'type' => 'food',
            'price' => '0.99', 'href' => '/Chocolate-Cake-Pop', 'img' => 'assets/images/.jpg'),
        array('id' => '10', 'name' => 'Blueberry Yogurt & Honey Muffin', 'type' => 'food',
            'price' => '1.50', 'href' => '/Blueberry-Yogurt-Honey-Muffin', 'img' => 'assets/images/.jpg'),
        array('id' => '11', 'name' => 'Chocolate Chunk Muffin', 'type' => 'food',
            'price' => '1.50', 'href' => '/Chocolate-Chunk-Muffin', 'img' => 'assets/images/.jpg'),
        array('id' => '12', 'name' => 'Lemon Loaf', 'type' => 'food',
            'price' => '1.00', 'href' => '/Lemon-Loaf', 'img' => 'assets/images/.jpg'),
        array('id' => '13', 'name' => 'Plain Bagel', 'type' => 'food',
            'price' => '2.49', 'href' => '/Plain-Bagel', 'img' => 'assets/images/.jpg'),
        array('id' => '14', 'name' => 'Egg & Cheddar Breakfast Sandwich', 'type' => 'food',
            'price' => '4.99', 'href' => '/Egg-Cheddar-Breakfast-Sandwich', 'img' => 'assets/images/.jpg')
    );
    
    // Constructor
    public function __construct(){
        parent::__construct();
    }
    
    // retrieve all items in the menu
    public function all(){
        return $this->data;
    }
    
    // find and return item by name
    public function find($name){
        // replace '-', '&' symbols
        $target = preg_replace("/[\s-&]/", "", $name);
        $noItemIsFound = array('name' => 'Cannot find item');
        
        foreach($this->data as $d){
            $orgin = preg_replace("/[\s&-]/", "", $d['name']);
            if($orgin == $target){
                return $d;
            }
        }
        
        return $noItemIsFound;
    }
}
