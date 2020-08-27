<?php

// oggetto User
class User {
  public $id;
  public $nome;
  public $cognome;
  public $eta;
  public $email;
  public $password;
  public $tipo;
  public $sconto = 0;

  public function __construct($_nome, $_cognome, $_eta, $_email) {
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->eta = $_eta;
    $this->email = $_email;
  }
  public function getFullName() {
    return $this->nome . ' ' . $this->cognome;
  }
  public function setSconto($_eta) {
    if ($_eta > 65) {
      $this->sconto = 20;
    }
  }
  public function getSconto() {
    return $this->sconto;
  }
};

?>
