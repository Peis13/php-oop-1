<!-- Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users. -->

<?php

require_once(__DIR__ . '/database.php');
require_once(__DIR__ . '/User.php');

foreach ($db_users as $user) {
  $utente = new User($user['nome'], $user['cognome'], $user['eta'], $user['email']);
?>

<label>Utente: <?php echo $utente->getFullName(); ?></label>
<ul>
  <li>Email: <?php echo $user['email']; ?></li>
  <li>Età: <?php echo $user['eta']; ?></li>
  <li>Tipo: <?php echo $user['tipo']; ?></li>
</ul>

<?php
  }
?>
