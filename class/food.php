<?php

  require_once __DIR__ . '/products.php';

  class Food extends Products{
    private $expiration;

    public function __construct($_prodName, $_animal, $_price, $_category, $_expiration){
      parent::__construct($_prodName, $_animal, $_price, $_category);
      
      $this->expiration = $_expiration;
    }

    public function setExpiration($_expiration){
      $this->expiration = $_expiration;
    }

    public function getExpiration(){
      $this->expiration;
    }
  }