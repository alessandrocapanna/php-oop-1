<?php
class user
{

  public $ID;
  public $nome;
  public $cognome;
  public $email;
  public $età;

  public function getFullName(){
    echo 'Utente: ' . $this->nome . ' ' . $this->cognome . ' email: ' . $this->email . ' eta: '. $this->età . '<br>';
  }
}
?>
