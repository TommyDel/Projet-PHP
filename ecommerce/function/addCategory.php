<?php 
function addCategory($arrayCategories, $newCategory){
    array_push($arrayCategories, $newCategory);
    return $arrayCategories;
}

function newCategory( $newCategory){
    global $monTableauCategories;
    array_push($monTableauCategories, $newCategory);
   
}