<?php

  class Products{
    private $name;
    private $animal;
    private $price;

    public function __construct($_name, $_animal, $_price){
      $this-> name = $_name;
      $this-> animal = $_animal;
      $this-> price = $_price;
    }
    
    // Setter
    public function setName($_name){
      $this-> name = $_name;
    }
    public function setAnimal($_animal){
      $this-> animal = $_animal;
    }
    public function setPrice($_price){
      $this-> price = $_price;
    }

    // Getter

    public function getName(){
      $this-> name;
    }
    public function getAnimal(){
      $this-> animal;
    }
    public function getPrice(){
      $this-> price;
    }
  }