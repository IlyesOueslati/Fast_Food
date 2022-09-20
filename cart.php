<?php
ob_start();
    include("header.php");
?>


<?php
    count($product->getData('cart')) ? include('partials/_cart-template.php') : include('partials/notFound/_cart_notFound.php');

    count($product->getData('wishlist')) ? include('partials/_wishlist_template.php') : include('partials/notFound/_wishlist_notFound.php');

    include("partials/_top-sale.php");
?>



<?php
    include("footer.php");
?>











