<?php

class cartaCredito{

    public $numeroCarta;
    public $expirationMonth;
    public $expirationYear;

    public function __construct($numeroCarta){
        $this->numeroCarta = $numeroCarta;
    }

    public function getExpirationMonth() {
        return $this->expirationMonth;
    }
    
    public function setExpirationMonth($number) {
        if (is_numeric($number) && $number >= 1 && $number <= 12) {
            $this->expirationMonth = $number;
        }
    }


    public function getExpirationYear() {
        return $this->expirationYear;
    }
    
    public function setExpirationYear($number) {
        if (is_numeric($number) && $number >= 0 && $number <= 99) {
            $this->expirationYear = $number;
        }
    }

    public function isExpired() {

        $expires = DateTime::createFromFormat('m-y', $this->expirationMonth.'-'.$this->expirationYear);
        $now = new DateTime();

        if ($expires < $now)  {
            return ('La carta di credito è scaduta!!!');
        }
        return ('Pagamento accettato');
    }
}