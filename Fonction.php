

<?php 
function addCat($newCat, $catsProds){
    array_push($newCat, $catsProds);
    return $newCat ;
}


function addProd($tabs, $prods){
    array_push($tabs, $prods);
    return $tabs ;
}

/*function totalPrice ($prixHt, $taux=20, $qte) {
   
    $prixTTC = ($prixHt*(($taux/100)+1))*$qte;
    $prixTTC = round($prixTTC,2);

    if ($taux == true) : 
        return $prixTTC;
    else :
           return  $prixHt;
    endif;
}*/ 

?>