<?php
class User {
  private $_name;
  private $_surname;
  private $_email;
  private $_password;

  public function __construct() {
    $this -> name;
    $this -> surname;
    $this -> email;
    $this -> password;
  }

  public function logIn($_email, $_password) {}
  public function logOut($_email, $_password) {}
  public function modifyPassword($_password) {}
}