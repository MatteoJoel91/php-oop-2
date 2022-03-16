<?php 

require_once __DIR__ . '/classes/prodotto.php';
require_once __DIR__ . '/classes/food.php';
require_once __DIR__ . '/classes/games.php';
require_once __DIR__ . '/classes/user.php';
require_once __DIR__ . '/classes/user_registrato.php';
require_once __DIR__ . '/classes/creditcard.php';

$food = new food ('Cibo per cani', 'Crocchette', 1, 'si');
$food->setPrezzo(10);
$user_registrato = new userRegistrato ('Luca', 'Rossi', 'Luca@gmail.com');
$user_registrato->setNumero('333-1234567');
$user_registrato->registrato = true;
$cartaCredito = new cartaCredito('5555-2222-3333-7777', '12/27');
$cartaCredito->verificaScadenza = false;


echo 'Prodotto: '. $food->name;
echo '<br>';
echo 'Tipo di cibo: '. $food->tipoCibo;
echo '<br>';
echo 'Prezzo: '. $food->prezzo .' euro';
echo '<br>';
echo $user_registrato->getSconto();
echo '<br>';
echo 'Prodotto confezionato: '. $food->confezionato;
echo '<br>';
echo '<br>';
echo 'Dati utente';
echo '<br>';
echo 'Nome: ' . $user_registrato->name;
echo '<br>';
echo 'Cognome: ' . $user_registrato->cognome;
echo '<br>';
echo 'Email: ' . $user_registrato->email;
echo '<br>';
echo 'Numero di telefono: ' . $user_registrato->numeroTelefono;
echo '<br>';
echo '<br>';
echo 'Pagamento';
echo '<br>';
echo 'Numero carta: '. $cartaCredito->numeroCarta;
echo '<br>';
echo $cartaCredito->pagamento();

