<?php

class cartaCredito{

    public $numeroCarta;
    public $dataScadenza;
    public $verificaScadenza;

    public function __construct($numeroCarta, $dataScadenza){
        $this->numeroCarta = $numeroCarta;
        $this->dataScadenza = $dataScadenza;
    }

    public function pagamento(){
        if($this->verificaScadenza == true){
            echo 'Il pagamento non può essere effettuato, la carta è scaduta';
        }else{
            echo 'Il pagamento può essere completato';
        }
    }
}