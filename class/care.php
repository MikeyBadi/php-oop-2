<?php

  require_once __DIR__ . '/products.php';

  class Care extends Products{
    private $type;

    public function __construct($_prodName, $_animal, $_price, $_category, $_type){
      parent::__construct($_prodName, $_animal, $_price, $_category);
      
      $this->type = $_type;
    }

    public function setType($_type){
      $this->type = $_type;
    }

    public function getType(){
      $this->type;
    }
  }