<?php

class user {
    public $name;
    public $cognome;
    public $numeroTelefono;
    public $sconto = 0;

    public function __construct($name, $cognome){
        
        $this->name = $name;
        $this->cognome = $cognome;

    }

    public function setNumero($numeroTelefono){
        $this->numeroTelefono = $numeroTelefono;
    }
}