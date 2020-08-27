<?php
  class role extends user{
    public $role = '';

    public function getRole($role){
      if ($this->$role == 'teacher') {
        $role = 'teacher';
      }elseif ($this->$role == 'student') {
        $role = 'student';
      }
      return $role . ' <br>';
    }
  }
?>
