<?php

require_once __DIR__ . '/prodotto.php';

class games extends prodotto{

    public $tipoGioco;
    public $fasciaEta;


    public function __construct($name, $tipoGioco, $fasciaEta){
        
        parent::__construct($name);

        $this->tipoGioco = $tipoGioco;
        $this->fasciaEta = $fasciaEta;

    }
}