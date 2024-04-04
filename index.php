<?php
require './Models/Category.php';

require './Models/Product.php';
require './Models/Food.php';
require './Models/Toy.php';

require_once './Models/Customer.php';
require_once './Models/PremiumCustomer.php';



// categorie
$dogs = new Category('Dogs', '<i class="fa-solid fa-dog"></i>');
$cats = new Category('Cats', '<i class="fa-solid fa-cat"></i>');




// prodotti

$prod1 = new Product('Pettorina', 20.99, true, './img/prod-1.jpg', [$dogs]);
$prod2 = new Food('Crocchette per gatti', 14.99, true, './img/prod-2.jpg', [$cats], '2kg');
$prod3 = new Toy('Pallina', 5.99, true, './img/prod-3.jpg', [$dogs, $cats], 'Rubber', '50g');
$prod4 = new Product('Guinzaglio', 30.00, true, './img/prod-4.jpg', [$dogs, $cats]);


$products = [
    $prod1, $prod2, $prod3, $prod4,
];


// utenti
$customer1 = new Customer('mario@gmail.com', 'Via Firenze');
$customer1->addToCart($prod1);
$customer1->addToCart($prod2);

$customer2 = new PremiumCustomer('giorgio@gmail.com', 'Via Roma', 'giorgino');
$customer2->addToCart($prod1);
$customer2->addToCart($prod2);

?>

<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
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
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">PetShop</a>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container my-5 ">
        <ul class="row row-cols-3">
            <?php foreach ($products as $currentProducts) { ?>
                <div class='card'>

                    <img src='<?= $currentProducts->image ?>' class='card-img-top p-3 h-100 '>

                    <div class='card-body pt-1'>
                        <div class="d-flex justify-content-between">
                            <h5 class='card-title mb-3'><?= $currentProducts->name ?></h5>
    
                            <div class="d-flex gap-1 ">
                                <?php foreach($currentProducts->category as $currentCategory) { ?>
                                <span class='card-title mb-3'><?= $currentCategory->icon ?></span>
                                <?php } ?>
                            </div>
                        </div>
                    
                        <div class='card-text mb-3 '><?= $currentProducts?->getPrice() ?></div>
                    
                        <h6 class="d-flex justify-content-end text-success ">
                            <?= $currentProducts->getIconProduct() ?>
                        </h6>
                    </div>
                </div>
            <?php } ?>
        </ul>


        // visualizzazione a schermo delle differenze di utenti
        <div> <?php echo "Totale utente normale: " . $customer1->getCartTotal(); ?> </div> 
        <div> <?php echo "Totale utente premium: " . $customer2->getCartTotal(); ?> </div>


        // utilizzo delle trails
        <div>
            <?php echo $prod2->getWeight() ?>
        </div>
    </div>

    

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>