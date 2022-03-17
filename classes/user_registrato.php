<?php

require_once __DIR__ . '/user.php';

class userRegistrato extends user {

    public $email;
    
    public function __construct($name, $cognome, $email = ''){
        
        $this->email = $email;
        parent::__construct($name, $cognome);

    }
  
}