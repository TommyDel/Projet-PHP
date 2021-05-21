<?php   include("Categorie.php") ?>
<?php   include("Produit.php") ?>
<?php   include("Fonction.php") ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-COMMERCE</title>
</head>
<body>
<?php echo $catsProds[0]['Nom'];?>
  
                <?php foreach ($catsProds as $key => $catProd): ?>

                <div>
                    <a href=""><h2>Catégorie : <?php echo $catsProds[$key]['Nom']; ?></h2></a>
                    <p>Description : <?php echo $catsProds[$key]['Description']; ?></p>
                    <img src="<?php echo ($image)?>">
                </div>
                    <?php endforeach; ?>
                    

                <?php foreach ($prods as $key => $prod) :?>
                <div>
                    <h2>Produit : <?php echo ucfirst($prods[$key]['Designation']); ?></h2>
                    <p>Description : <?php echo $prods[$key]['Description']; ?></p>
                    <p>Prix TTC : <?php echo round($prod['PrixHT']*($prod['TVA'] + 1), 2);?></p>
                    <img src="<?php echo ($image2)?>">
                </div>
                    <?php endforeach; ?>

</body>
</html>

