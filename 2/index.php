<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';

$products = [
  new Food('Royal Canin', 'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/royal/canin/puppy/royal/canin/adult/9/140/1_icon_percent_template_1000x1000_int_4_20__9.jpg', 20, "dog", true, 300, ['prosciutto', 'riso']),
  new Food('Almo Nature', 'https://shop-cdn-m.mediazs.com/bilder/gratis/x/g/almo/nature/hfc/umido/per/gatti/5/140/icons_saverpacks_pyramids_0x00g_template_1000x1000_int_2022_03_21t090118_674_5.jpg', 40, 'gatto', true, 400, ['tonno', 'pollo', 'prosiutto'])
];


$food = array_filter($products, fn ($product) => get_class($product) == 'Food' && $product->is_available);


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Esercizio2</title>
</head>

<body>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Immagine</th>
          <th scope="col">Categoria</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($food as $item) : ?>
          <tr>
            <th><?php echo $item->name ?></th>
            <td><img src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>" title="<?php echo $item->name ?>"></td>
            <td>
              <strong><?php echo $item->category ?></strong>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>