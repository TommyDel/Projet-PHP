<?php
    $langues = array("Français", "Anglais", "Espagnol", "Italien", "Gaelique");
    array_push($langues, "Russe","Vieux Norrois");//empile à la fin du tableau 
    var_dump($langues);//affiche le tableau
?>


<?php/*
    $langues = array("Français", "Anglais", "Espagnol", "Italien", "Gaelique");
    array_unshift($langues, "Russe","Vieux Norrois");//empile au début du tableau 
    var_dump($langues);
*/?>


<?php
    $langues = array(
        array("Français", "Anglais", "Espagnol", "Italien", "Gaelique"),
        array("Débutant", "Intermediaire", "Confirmé"),
    );
    var_dump($langues);
    echo $langues[0][4], " niveau: ", $langues [1][0];
    
?>

