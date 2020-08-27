<?php

// oggetto User
class User {
  public $nome;
  public $cognome;
  public $eta;
  public $email;
  public $password;

  public function __construct($_nome, $_cognome, $_eta, $_email) {
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->eta = $_eta;
    $this->email = $_email;
  }

  public function getFullName() {
    return $this->nome . ' ' . $this->cognome . '<br>';
  }

  public function getDetails() {
    return $this->getFullName() . 'Email: ' . $this->email . '<br>' . 'Età: ' . $this->eta . '<br>';
  }
};

?>
