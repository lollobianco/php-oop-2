<?php

include_once __DIR__ . "/classi/category.php";
include_once __DIR__ . "/classi/accessori.php";
include_once __DIR__ . "/classi/cibo.php";
include_once __DIR__ . "/classi/giocattoli.php";

$arrayCategorie = [

   'cane' => new Categoria('Cane', 'iconaCane'),
   'uccello' => new Categoria('Uccello', 'iconaUccello'),
   'gatto' => new Categoria('Gatto', 'iconaGatto')

];

$arrayProdotti = [

   new Cibo('https://picsum.photos/200/200', 'Royal Canin', 43.99, $arrayCategorie['cane'], '545g', 'Pollo'),
   new Cibo('https://picsum.photos/200/200', 'Almo Nature', 43.99, $arrayCategorie['cane'], '600g', 'Grano'),
   new Accessori('https://picsum.photos/200/200', 'Voilera', 185.99, $arrayCategorie['uccello'], 'Legno', 'M: L 83 x P 67 x H 153 cm'),
   new Giocattoli('https://picsum.photos/200/200', 'Topini Peluche', 5.99, $arrayCategorie['gatto'], 'Morbido', '8,5 cm x 10 cm'),

];

?>

<!doctype html>
<html lang="en">

<head>
   <title>Boolshop</title>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS v5.2.1 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="container p-5">

   <h1>BoolShop</h1>

   <h2>I nostri prodotti</h2>


   <div class="d-flex gap-4 align-items-center mt-5">

      <?php foreach ($arrayProdotti as $element) { ?>


         <div class="card" style="width: 18rem;">
            <img src=" <?php echo $element -> immagine ?>  " class="card-img-top" alt="">
            <div class="card-body">
               <p class="card-text fs-5"><?php echo ('<b>' . $element->nome . '</b>'); ?></p>
               <p><?php echo ($element->category->icon . ' ' . $element->category->nome); ?></p>
               <p class="card-text fs-7">Prezzo: <?php echo ($element->prezzo . ' ' . 'Euro'); ?></p>

               <?php if (get_class($element) == "Cibo") { ?>
                  
                  <p class="card-text fs-7">Peso netto: <?php echo ($element->peso); ?></p>
                  <p class="card-text fs-7">Ingredienti: <?php echo ($element->ingredienti); ?></p>
                  
               <?php } elseif (get_class($element) == "Accessori") { ?>

                  <p class="card-text fs-7">Materiale: <?php echo ($element->materiale); ?></p>
                  <p class="card-text fs-7">Dimensioni: <?php echo ($element->dimensioni); ?></p>

               <?php } elseif (get_class($element) == "Giocattoli") { ?>

                  <p class="card-text fs-7">Caratteristiche: <?php echo ($element->caratteristiche); ?></p>
                  <p class="card-text fs-7">Dimensioni: <?php echo ($element->dimensioni); ?></p>

               <?php }; ?>

            </div>

         </div>

      <?php } ?>

   </div>



   <!-- Bootstrap JavaScript Libraries -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
   </script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
   </script>
</body>

</html>