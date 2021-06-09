<?php

class Customer extends User {
  
  private $address;
  private $birthDate;
  private $sex;

  public function __construct() 
  {
    parent::__construct();
  }

  public function addCustomer(){}
}