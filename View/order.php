<?php include_once './Model/ProductModel.php'; ?>

<?php

    if(!isset($_GET['id'])) die();

    $product = getProduct($_GET['id']);
    create_order($product['id'], $product['name'], $product['image'], $product['price'], 1);

     redirect("cart.php");
?>