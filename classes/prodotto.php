<?php

class prodotto {

    public $name;
    public $prezzo;
    

    public function __construct($name){

        $this->name = $name;
        
    }
    public function setPrezzo($prezzo){
        $this->prezzo = $prezzo;
    }
}