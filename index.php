<?php
  require_once(__DIR__ . '/user.php');
  require_once(__DIR__ . '/role.php');

  $utenti = [
    [
      'ID' => 1,
      'nome' => 'alessandro',
      'cognome' => 'rossi',
      'email' => 'alessandrorossi@hotmail.it',
      'età' => 29,
      'role' => 'student'
    ],
    [
      'ID' => 2,
      'nome' => 'daniele',
      'cognome' => 'bianchi',
      'email' => 'danielebianchi@hotmail.it',
      'età' => 22,
      'role' => 'teacher'
    ],
    [
      'ID' => 3,
      'nome' => 'mirko',
      'cognome' => 'scopano',
      'email' => 'mirkoscopano@hotmail.it',
      'età' => 55,

    ],
  ];

  foreach ($utenti as $utente) {
    $userDaStampare = new user();
    $userDaStampare->ID = $utente['ID'];
    $userDaStampare->nome = $utente['nome'];
    $userDaStampare->cognome = $utente['cognome'];
    $userDaStampare->email = $utente['email'];
    $userDaStampare->età = $utente['età'];
    $stampa = $userDaStampare->getFullName();

    $roleDaStampare = new role();
    // $roleDaStampare->role = $utente['role'];
    $stampaRuolo = $roleDaStampare->getRole($utente['role']);

    echo $stampa . ' ' . $stampaRuolo ;
  }
?>
