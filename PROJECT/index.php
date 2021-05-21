<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NETFLUX</title>
</head>
<body>
    
    <h1>FLIMS</h1>


</body>
</html>

<?php
    $films=array(
        array('Title'=>"Blade Runner",'Année de Sortie'=>"1982",'Synopsis'=>"Like Tears in Rain..."),
        array('Title'=>"Les Affranchis",'Année de Sortie'=>"1990",'Synopsis'=>"Funny how ?"),
        array('Title'=>"Heat",'Année de Sortie'=>"1995",'Synopsis'=>"BANG"),
        array('Title'=>"Les Dents de la Mer",'Année de Sortie'=>"1975",'Synopsis'=>"We're gonna need a bigger boat"),
        array('Title'=>"The Thing",'Année de Sortie'=>"1982",'Synopsis'=>"There's a storm hitting us in six hours, and we're gonna find out who's who..."),
       
    );
    $catégories = array("Action", "Aventure", "Science-Fiction", "Horreur", "Policier");
    //$realisateurs= array("Ridley Scott", "Martin Scorcese", "Michael Mann", "Steven Spielberg", "John Carpenter");

    $films[0]["Realisateur"]=array('Realisateur'=>"Ridley Scott");
    $films[1]["Realisateur"]=array('Realisateur'=>"Martin Scorcese");
    $films[2]["Realisateur"]=array('Realisateur'=>"Michael Mann");
    $films[3]["Realisateur"]=array('Realisateur'=>"Steven Spielberg");
    $films[4]["Realisateur"]=array('Realisateur'=>"John Carpenter");

    $films[0]["Categorie"]=array('Genre'=>"Science-Fiction");
    $films[1]["Categorie"]=array('Genre'=>"Biopic");
    $films[2]["Categorie"]=array('Genre'=>"Policier");
    $films[3]["Categorie"]=array('Genre'=>"Aventure");
    $films[4]["Categorie"]=array('Genre'=>"Horreur");

    var_dump($films)
 
    
?>