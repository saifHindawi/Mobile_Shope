<?php
ob_start();
    // include header.php
    include("./header.php");
?>

<?php
    //include _products.php
    include("./Template/_cart-template.php");
    
    //include _new-phones.php
    include("./Template/_new-phones.php");
?>

<?php
    //include footer.php
    include("./footer.php");
?>