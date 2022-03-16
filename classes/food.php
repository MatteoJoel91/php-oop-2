<?php

require_once __DIR__ . '/prodotto.php';

class food extends prodotto {

    public $tipoCibo;
    public $peso;
    public $confezionato;
    
    public function __construct($name, $tipoCibo, $peso, $confezionato){
        
        parent::__construct($name);

        $this->tipoCibo = $tipoCibo;
        $this->peso = $peso;
        $this->confezionato = $confezionato;

    }
    
    

}