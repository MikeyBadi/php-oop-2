<?php
  class Buyer{
    private $name;
    private $surname;
    private $birth;
    private $cardValid;
    private $cardExpired = true;
    private $discount = 0;

    public function __construct($_name, $_surname, $_birth, $_cardValid, $_discount){
      $this->name = $_name;
      $this->surname = $_surname;
      $this->birth = $_birth;
      $this->cardValid = $_cardValid;
      $this->discount = $_discount;
  
    }

    // Setter
    public function setName($_name){
      $this->name = $_name;
    }
    public function seSurname($_surname){
      $this->surname = $_surname;
    }
    public function setBirth($_birth){
      $this->birth = $_birth;
    }
    public function setCardValid($_cardValid){
      $this->cardValid = $_cardValid;
    }
    public function setDiscount($_discount){
      $this->discount = $_discount;
    }

    // Getter
    public function getName(){
      return $this->name;
    }
    public function getSurname(){
      return $this->surname;
    }
    public function getBirth(){
      return $this->birth;
    }
    public function getCardValid(){
      return $this->cardValid;
    }
    public function getDiscount(){
      return $this->discount;
    }
  }
