<?php
    
Class Chien{
    public $name;
    public $age;
    public $race;

    public function __construct($name, $age, $race){
        
        $this -> name = $name;
        $this -> age = $age;
        $this -> race = $race; 

    }

    public function display_dog_info(){
        echo nl2br("Nom : {$this->name} - Age : {$this -> age} - Race : {$this -> race}\n");
    }
}