<!-- Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users. -->

<?php

require_once(__DIR__ . '/database.php');
require_once(__DIR__ . '/user.php');

foreach ($db_users as $user) {
  $utente = new User($user['nome'], $user['cognome'], $user['eta'], $user['email']);

  echo 'Utente: ' . $utente->getDetails() . '<br>';
}

?>
