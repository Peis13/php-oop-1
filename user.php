<?php

// oggetto User
class User {
  public $nome;
  public $cognome;
  public $eta;
  public $email;
  public $password;

  public function __construct($_nome, $_cognome, $_eta) {
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->eta = $_eta;
  }

  public function getFullName() {
    return $this->nome . ' ' . $this->cognome . '<br>';
  }

  public function getDetails() {
    return $this->getFullName() . 'Età: ' . $this->eta . '<br>';
  }
};

?>
