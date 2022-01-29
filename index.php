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

$tastiera = new Keyboard('logitec', 80);
var_dump($tastiera);


$monitor = new Monitor('LG', 220);
var_dump($monitor);

?>