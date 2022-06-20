<?php

  require_once __DIR__ . '/products.php';

  class Games extends Products{
    private $material;

    public function __construct($_name, $_animal, $_price, $_category, $_material){
      parent::__construct($_name, $_animal, $_price, $_category);
      
      $this->material = $_material;
    }

    public function setMaterial($_material){
      $this->material = $_material;
    }

    public function getMaterial(){
      $this->material;
    }
  }