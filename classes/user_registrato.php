<?php

require_once __DIR__ . '/user.php';

class userRegistrato extends user {

    public $registrato;
    
    public function __construct($name, $cognome, $email){
        
        parent::__construct($name, $cognome, $email);

    }

    public function getSconto(){
        if($this->registrato == true){
            echo 'Hai diritto al 20% di sconto in quanto sei registrato';
        }else{
            echo 'Non hai diritto allo sconto in quanto non sei registrato';
        }
    } 

}