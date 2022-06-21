<?php

  require_once __DIR__ . '/buyer.php';

  class RegCustomer extends Buyer{
    private $registred = false;

    public function __construct($_name, $_surname, $_birth, $_cardValid, $_discount, $_registred){
      parent::__construct($_name, $_surname, $_birth, $_cardValid, $_discount);
      $this->discount = 20;
      $this->registred = $_registred;
    }

    public function setReg($_registred){
      $this->registred = $_registred;
    }

    public function getReg(){
      $this->registred;
    }
  }