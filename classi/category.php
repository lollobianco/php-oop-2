<?php 

class Categoria{
   public $nome;
   public $icon;

   public function __construct(
      String $nome,
      String $icon
   )
   {
      
      $this -> nome = $nome;
      $this -> icon = $icon;

   }
}

?>