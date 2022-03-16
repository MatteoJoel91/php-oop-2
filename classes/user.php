<?php

class user {
    public $name;
    public $cognome;
    public $email;
    public $numeroTelefono;

    public function __construct($name, $cognome, $email){
        
        $this->name = $name;
        $this->cognome = $cognome;
        $this->email = $email;

    }

    public function setNumero($numeroTelefono){
        $this->numeroTelefono = $numeroTelefono;
    }
}