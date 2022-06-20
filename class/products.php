<?php

  class Products{
    private $name;
    private $animal;
    private $price;
    private $category;

    public function __construct($_name, $_animal, $_price, $_category){
      $this-> name = $_name;
      $this-> animal = $_animal;
      $this-> price = $_price;
      $this-> category = $_category;
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
    public function setCategory($_category){
      $this-> category = $_category;
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
    public function getCategory($_category){
      $this-> category;
    }
  }