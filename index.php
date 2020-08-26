<?php

  class user
  {

    public $ID;
    public $nome;
    public $cognome;
    public $email;
    public $età;

    public function getFullName($nome , $cognome){
      echo 'Utente: ' . $nome . ' ' . $cognome . '<br>';
    }
  }

  $utenti = [
    [
      'ID' => 1,
      'nome' => 'alessandro',
      'cognome' => 'rossi',
      'email' => 'alessandrorossi@hotmail.it',
      'età' => 29
    ],
    [
      'ID' => 2,
      'nome' => 'daniele',
      'cognome' => 'bianchi',
      'email' => 'danielebianchi@hotmail.it',
      'età' => 22
    ],
    [
      'ID' => 3,
      'nome' => 'mirko',
      'cognome' => 'scopano',
      'email' => 'mirkoscopano@hotmail.it',
      'età' => 55
    ],
  ];

  foreach ($utenti as $utente) {
    $userDaStampare = new user();
    $userDaStampare->ID = $utente['ID'];
    $userDaStampare->nome = $utente['nome'];
    $userDaStampare->cognome = $utente['cognome'];
    $userDaStampare->email = $utente['email'];
    $userDaStampare->età = $utente['età'];
    $userDaStampare->getFullName($userDaStampare->nome , $userDaStampare->cognome);
  }
?>
