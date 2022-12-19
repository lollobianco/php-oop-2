<?php

include_once __DIR__ . "/classi/category.php";
include_once __DIR__ . "/classi/accessori.php";
include_once __DIR__ . "/classi/cibo.php";
include_once __DIR__ . "/classi/giocattoli.php";

$arrayCategorie = [

   'cane' => new Categoria ('Cane', 'iconaCane'),
   'uccello' => new Categoria ('Uccello', 'iconaUccello'),
   'gatto' => new Categoria ('Gatto', 'iconaGatto')

];

$arrayProdotti = [

   new Cibo ('immagine', 'Royal Canin', 43.99, $arrayCategorie['cane'], '300g', 'pollo'),
   new Cibo ('immagine', 'Almo Nature', 43.99, $arrayCategorie['uccello'], '300g', 'grano'),
   new Accessori ('immagine', 'Voilera', 185.99, $arrayCategorie['uccello'], 'legno', '10x10x10'),
   new Accessori ('immagine', 'Topini Peluche', 5.99, $arrayCategorie['gatto'], 'morbido', '5x2x2'),

];

foreach($arrayProdotti as $element){

   echo ($element -> immagine);
   echo ('</br>');
   echo ($element -> nome);
   echo ('</br>');
   echo ($element -> prezzo . ' ' . 'Euro');
   echo ('</br>');
   echo ($element -> category -> icon);
   echo ('</br>');
   echo ($element -> category -> nome);
   echo ('<hr>');

}

?>