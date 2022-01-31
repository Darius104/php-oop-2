<!-- 
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; 
    ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
    Strutturare le classi gestendo l'ereditarietà dove necessario; 
    ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
    Provate a stampare in pagina come visto questa mattina i prodotti scelti dall'utente.
 -->

<?php
require_once __DIR__ . '/Keyboard.php';
require_once __DIR__ . '/Monitor.php';
require_once __DIR__ . '/User.php';

$tastiera = new Keyboard('logitec', 80, 'American');

$monitor = new Monitor('LG', 220, 25);

$mario = new User('Mario', 'Rossi', 'mariorossi@gmail.com', 10);
$mario->addProduct($tastiera);
$mario->addProduct($monitor);
$mario_cart = $mario->getCart();

var_dump($mario_cart);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Benvenuto <?php echo $mario->getFullName() ?> questo è il tuo carrello !</h1>

    <?php foreach($mario_cart as $element) { ?>
        <div>
            <h2>----------------</h2>
            <h2>Nome: <?php echo $element->name ?> </h2>
            <h2>Descrizione: <?php echo $element->description ?> </h2>
            <h3>Prezzo: <?php echo $element->price ?> €</h3>
            <span>News: <?php echo $element->new ?></span>
        </div>
    <?php } ?>

</body>
</html>