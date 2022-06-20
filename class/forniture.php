<?php

  require_once __DIR__ . '/products.php';

  class Forniture extends Products{
    private $size;

    public function __construct($_name, $_animal, $_price, $_category, $_size){
      parent::__construct($_name, $_animal, $_price, $_category);
      
      $this->size = $_size;
    }

    public function setSize($_size){
      $this->size = $_size;
    }

    public function getSize(){
      $this->size;
    }
  }