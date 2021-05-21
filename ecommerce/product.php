<?php 
include('function/tva.php');
include('include/getCategories.php');
include('include/getProducts.php'); 
/*
$prixHtDuProduit = 100;
$taux = 5;

$prixTtcDuProduit = prixTTC($prixHtDuProduit, $taux);
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <?php include('include/menu.php'); ?>
    <?php   
    foreach($monTableauProducts as $unProduct):
        ?>
        <div>
            <h2><?php echo strtoupper($unProduct['name']);?></h2>
            <p><?php echo $unProduct['description'];?></p>
            <p><?php echo prixTTC($unProduct['price'], $unProduct['taxe']);?> €</p>
            <img src="<?php echo $unProduct['image'];?>" alt="<?php echo $unProduct['name'];?>">
        </div>
        <?php
        if($unProduct['stock'] < 3):
        ?>
            <span style="color:red;">Produit en rupture</span>
        <?php
        endif;
    endforeach;
    ?>
</body>
</html>