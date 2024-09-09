<?php
    //require MySQL Connection
    require('database/DBController.php');

    //require product class
    require('database/product.php');

    //DBController Object
    $db = new DBController();

    //Product Object
    $product = new Product($db);
    // print_r($product->getData());
?>