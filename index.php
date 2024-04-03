<?php
require './Models/Category.php';

require './Models/Product.php';
require './Models/Food.php';
require './Models/Toy.php';

// categorie
$dogs = new Category('Dogs', '<i class="fa-solid fa-dog"></i>');
$cats = new Category('Cats', '<i class="fa-solid fa-cat"></i>');

// prodotti
$products = [
    new Product('Pettorina', 20.99, true, '', [$dogs]),  
    new Food('Crocchette per gatti', 14.99, true, '', [$cats], '2kg'),
    new Toy('Pallina', 5.99, true, '', [$dogs, $cats], 'Rubber'),
];


var_dump($products);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - 2</title>
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <h1>Title</h1>

    <div class="container my-5 ">
        <ul class="row row-cols-3 ">
            <?php foreach ($products as $currentProducts) { ?>
                <div class='card'>

                    <img src='<?= $currentProducts->image ?>' class='card-img-top p-3'>

                    <div class='card-body pt-1'>

                        <h5 class='card-title mb-3'><?= $currentProducts->name ?></h5>

                        <?php foreach($currentProducts->category as $currentCategory) { ?>
                        <h5 class='card-title mb-3'><?= $currentCategory->type ?></h5>
                        <?php } ?>
                    
                        <p class='card-text'><?= $currentProducts?->price ?></p>
                    
                        <?= $currentProducts->getIconProduct() ?>
                    </div>
                </div>
            <?php } ?>
        </ul>
    </div>

    

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>