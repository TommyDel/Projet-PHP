
<?php 

    $categorie = array("Chiens", "Chats", "Oiseaux", "Rongeurs", "Reptiles");

        foreach ($categorie as $catPet) :
        echo $catPet;
        endforeach;

    $image = "https://images-ext-2.discordapp.net/external/fKwdgDeDZ0lLvugmya-fOO92sFH9eHuruLrqEJA3pf4/https/cdn-s-www.ledauphine.com/images/A2B51F63-FA5C-463B-B27E-3FDCDBDA7CFD/NW_raw/grumpy-cat-avait-7-ans-photo-twitter-1558093797.jpg";
   
    
    $catsProds = array(
        array('Nom' => 'Chiens', 'Description' => 'Doggo', 'Image'=> $image, 'ID'=> 0 ),
        array('Nom' => 'Chats', 'Description' => 'Kitty', 'Image'=> $image, 'ID'=> 1 ),
        array('Nom' => 'Oiseaux', 'Description' => 'Birdie', 'Image'=> $image, 'ID'=> 2 ),
        array('Nom' => 'Rongeurs', 'Description' => 'Mickey Mouse', 'Image'=> $image, 'ID'=> 3 ),
        array('Nom' => 'Reptiles', 'Description' => 'Snek', 'Image'=> $image, 'ID'=> 4 )
    );
    
    $newCat = array('machin', 'machin2', 'machin3', 'machin4', 'machin5');
    
    var_dump($catsProds);
    foreach ($categorie as $catPet) :
        echo $catPet;
        endforeach;


?>






   