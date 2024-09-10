<?php
    //require MySQL Connection
    require('database/DBController.php');

    //require product class
    require('database/product.php');

    //require cart class
    require('database/cart.php');

    //DBController Object
    $db = new DBController();

    //Product Object
    $product = new Product($db);
    $product_shuffle = $product->getData();
    // print_r($product->getData());

    //cart Object
    $Cart = new cart($db);
    ?>