<?php
class Car{
    public $make;
    public $model;
    public $colour;
    public $description;
    public $price;
    public $reg_number;
    public $reg_year;
    
    public function __construct($make, $model, $colour, $description, $price, $reg_number, $reg_year){
      $this->make = $make;
      $this->model = $model;
      $this->colour = $colour;
      $this->description = $description;
      $this->price = $price;
      $this->reg_number = $reg_number;
      $this->reg_year = $reg_year;
    }
    
    public function getAge(){
      $currentYear = (int)date("Y");
      $carCreation = (int)$this->reg_year;
      $carAge = $currentYear - $carCreation;
      return $carAge;
    }
 }
?>