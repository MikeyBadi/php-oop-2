<?php

  class Products{
    private $prodName;
    private $animal;
    private $price;
    private $category;

    public function __construct($_prodName, $_animal, $_price, $_category){
      $this-> prodName = $_prodName;
      $this-> animal = $_animal;
      $this-> price = $_price;
      $this-> category = $_category;
    }
    
    // Setter
    public function setProdName($_prodName){
      $this-> prodName = $_prodName;
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

    public function getProdName(){
      return $this-> prodName;
    }
    public function getAnimal(){
      return $this-> animal;
    }
    public function getPrice(){
      return $this-> price;
    }
    public function getCategory(){
      return $this-> category;
    }
  }