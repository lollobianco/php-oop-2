<?php 

include_once __DIR__ . "/prodotto.php";
class Cibo extends Prodotto{

   public $peso;
   public $ingredienti;

   public function __construct(
      String $immagine,
      String $nome,
      Float $prezzo,
      Categoria $category,
      
      String $peso,
      String $ingredienti
   )
   {
      $this -> peso = $peso;
      $this -> ingredienti = $ingredienti;
      parent::__construct($immagine, $nome, $prezzo, $category);
   }

}
