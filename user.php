<?php

// oggetto User
class User {
  public $nome;
  public $cognome;
  public $eta;
  public $email;
  public $password;

  public function __construct($name, $lastname) {
    $this->nome = $name;
    $this->cognome = $lastname;
  }

  public function getFullName() {
    return $this->nome . ' ' . $this->cognome . '<br>';
  }

  public function getDetails() {
    return $this->getFullName() . 'Età: ' . $this->eta . '<br>';
  }
};

?>
