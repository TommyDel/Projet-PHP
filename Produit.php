
<?php   

    $image2 = "https://upload.chatsdumonde.com/img_global/24-accessoires-objets-pour-chat/_big-2023-panier-pour-chat.jpg";
    $tva = 2.1/100;
   
    $prods = array(
        array('Designation' => 'coussin', 'PrixHT' => 19.90, 'Description' => 'Gros dodo', 'TVA' => $tva, 'Image'=> $image2, 'Categorie' => $catsProds[0]['ID']),
        array('Designation' => 'panier', 'PrixHT' => 29.90, 'Description' => 'Coucouche Panier', 'TVA' => $tva,'Image'=> $image2, 'Categorie' => $catsProds[1]['ID']),
        array('Designation' => 'jouets', 'PrixHT' => 14.90, 'Description' => 'Les joujoux', 'TVA' => $tva, 'Image'=> $image2, 'Categorie' => $catsProds[2]['ID']),
        array('Designation' => 'balles', 'PrixHT' => 9.90, 'Description' => 'Elle est où la baballe ?', 'TVA' => $tva, 'Image'=> $image2, 'Categorie' => $catsProds[4]['ID']),
        array('Designation' => 'croquettes', 'PrixHT' => 4.90, 'Description' => 'Y a bon à manger', 'TVA' => $tva, 'Image'=> $image2, 'Categorie' => $catsProds[3]['ID'])
    );
    
    $tabs = array('truc1', 'truc2', 'truc3', 'truc4', 'truc5',);
    
?>


