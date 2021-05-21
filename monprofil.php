<?php
    $firstnameUser = ucfirst("thomas");
    $lastNameUser = strtoupper("delafosse");
    $jobUser = trim(strtolower("Developpeur Web Full Stack ")); 

    $identity = $firstnameUser.' '.$lastNameUser;

    $birthYear = 1991;
    $currentYear = 2021;
    

    $age = $currentYear - $birthYear;


    $hourlySalary = 10.45;
    $weeklySalary = 5 * 7 * 10.45;


    $weeklySalaryFloor = floor($weeklySalary);
    $weeklySalaryCeil = ceil($weeklySalary);
    $weeklySalaryRound = round($weeklySalary, 1);

    //Booleen
    $fullTime = true;
    $manager = false; 

    //Condition 

    //Methode 1 
   /* if($fullTime){
        $contrat = "temps plein";
    }
    else {
        $contrat =  "temps partiel";
    }*/

    //Methode 2
    if ($fullTime) : 
        $contrat = "temps plein";
    else :
        $contrat = "temps partiel";
    endif;

    //Tableau méthode 1
    $languages = array('Français', 'Anglais', 'Italien');

    //Tableau méthode 2
    $languages2 = array(
        0 => 'Français', 
        1 => 'Anglais', 
        2 => 'Italien');


    //Tableau Méthode 3
    $languages3[] = 'Français';
    $languages3[] = 'Anglais';
    $languages3[] = 'Italien';
   
   
    //Tableau Méthode 4 : empile à la fin 
    array_push($languages, "Croate", "Allemand");

    //unshift : empile au début
    array_push($languages, "espagnol" );

   // var_dump($languages);

    // 2 dimensions = Tableau dans un tableau 

    //Tableau 2 dimensions méthode 12
    $languageLevel = array(
        array('Nom' => 'Anglais', 'Niveau' => 'Intermédiaire', 'lu' => true, 'sous-titre' => true),
        array('Nom' => 'Français', 'Niveau' => 'Expert', 'lu' => true, 'sous-titre' => false),
        array('Nom' => 'Croate', 'Niveau' => 'Débutant', 'lu' => true, 'sous-titre' => true)
    );

    $languageLevel[0]['Niveau'] = 'Débutant';
    $languageLevel[0]['Niveau'] = null;

    $array= array('Nom' => 'Espagnol', 'Niveau' => 'Expert', 'lu' => false);

    array_push($languageLevel , $array);


    var_dump($languageLevel);

    //Tableau 2 dimensions méthode 1
    
    $languageLevel2 = [
        ['Nom' => 'Anglais', 'Niveau' => 'Intermédiaire'],
        ['Nom' => 'Français', 'Niveau' => 'Expert'],
        ['Nom' => 'Croate', 'Niveau' => 'Débutant']
    ];

    //var_dump($languageLevel2);

    $loisirs = array('Foot', 'Piscine', 'Musique', 'Cuisine', 'Jeux Videos');


?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Mon profil</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1><?php echo $firstnameUser; ?> <strong><?php echo $lastNameUser; ?></strong></h1>
    <h1><?php echo $identity; ?></h1>
    <?php
    if ($birthYear < 1990)
    echo "BOOMER";
    elseif($birthYear >= 1990)
    echo "ZOOMER";
    ?>
    <hr/>

    <?php

    //condition
    if($birthYear < 1990):
    ?>
       <h3><?php echo "Senior"; ?></h3>
    <?php
    else :
    ?>
        <h3><?php echo "Junior"; ?></h3>
     <?php

    endif;?>
    
    <h2>-<?php echo $jobUser; ?>-</h2>
    <p>Age : <?php echo $age; ?> ans</p>
    <p>Salaire par semaine <?php echo $weeklySalary; ?> €</p>
    <p>Salaire par semaine arrondi au plus bas <?php echo $weeklySalaryFloor; ?> €</p>
    <p>Salaire par semaine arrondi au plus haut <?php echo $weeklySalaryCeil; ?> €</p>
    <p>Salaire par semaine arrondi  <?php echo $weeklySalaryRound; ?> €</p>

    <p>Plein temps  : <?php echo $fullTime; ?> </p>
    <p>Manager  : <?php echo $manager; ?> </p>
    <p>Contrat : <?php echo $contrat; ?></p>
    <p><?php echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non cursus mi, sed porttitor nisl. Cras sit amet sem tempor, tincidunt lorem vitae, varius neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus sed nibh enim. Ut accumsan magna sit amet leo porttitor elementum. Sed non ligula sapien. Etiam id sapien enim. Donec vitae mi sed magna hendrerit ultrices congue blandit neque. Vestibulum massa dolor, facilisis in vehicula vitae, scelerisque non justo. Nullam dignissim laoreet ultricies. Praesent vitae massa et ex auctor lobortis. Nulla dictum est in orci volutpat rhoncus. Nunc risus dui, euismod sit amet ipsum quis, maximus porttitor sapien.'; ?></p>
    <hr/>
    Langues parlées
    <ul>
        <?php
        //Tableau méthode 2
        /* $languages2 = array(
                    0 => 'Français', 
                    1 => 'Anglais', 
                    2 => 'Italien');*/
        //$languages2[$key]= $language
        foreach ($languages2 as $language) :
        ?>
            <li><?php echo $language; ?></li>
        <?php
        endforeach;
        ?> 

        <?php
        foreach ($languages2 as $language) {
        ?>
            <li><?php echo $language; ?></li>
        <?php
        }
        ?>       
    </ul>

    Langues parlées
    <select>
        <?php
        //Tableau méthode 2
        /* $languages2 = array(
                    0 => 'Français', 
                    1 => 'Anglais', 
                    2 => 'Italien');*/
        //$languages2[$key]= $language
        foreach ($languages2 as $key => $language) :
        ?>
            <option value="<?php echo $key; ?>"><?php echo $language; ?></option>
        <?php
        endforeach;
        ?>       
    </select>
    <hr/>

    <h3>Loisirs</h3>
    <ul>
        <?php
        foreach ($loisirs as $loisir) :
        ?>
           <li><?php echo $loisir; ?></li>
        <?php
        endforeach;
        ?>      
    </ul>

    Loisirs
    <select>
        <?php
            foreach ($loisirs as $key => $loisir) :
            ?>
                <option value="<?php echo $key; ?>"><?php echo $loisir; ?></option>
            <?php
            endforeach;
            ?>       
    </select>

    
</body>
</html>

