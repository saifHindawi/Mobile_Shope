<?php

    //require MySQL Connection
    require('../database/DBController.php');

    //require product class
    require('../database/product.php');

    //DBController Object
    $db = new DBController();

    //Product Object
    $product = new Product($db);
    
    if (isset($_POST['itemid'])){
        $result = $product->getProducts($_POST['itemid']);
        echo json_encode($result);
    }

?>