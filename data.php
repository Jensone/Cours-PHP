<?php 
/**
 * Page de traitement des données du fichier articles.json
 */

// DONE: On inclut le fichier articles.json

// $articles = json_decode(
//     file_get_contents(__DIR__ . '/assets/articles.json'), true // true pour tableau associatif
// );

// var_dump($articles); // Test OK
// echo $valeur['titre'] . '<br>';


// TODO: Boucles sur les articles

function allPosts(){
    $articles = json_decode(
        file_get_contents(__DIR__ . '/assets/articles.json'), true // true pour tableau associatif
    );
    foreach($articles as $valeur) { // Boucle sur les articles du tableau associatif : Test OK
        echo '<div class="card col-md-3 col-sm-12">'; // Début de la carte
        echo '<img src="https://placeholder.com/400" class="card-img-top mt-2 rounded" alt="' . $valeur['titre'] . '">';
        echo '<div class="card-body">'; // Début du corps de la carte
        echo '<h5 class="card-title">' . $valeur['titre'] . '</h5>'; // Titre de la carte
        echo '<p class="card-text fs-6">' . $valeur['contenu'] . '</p>'; // Contenu de la carte
        echo '<a href="#" class="btn btn-primary rounded-5">Lire la suite</a>'; // Bouton de la carte
        echo '</div></div>'; // Fin du corps de la carte avec les 2 div imbriquées
    }
}

// TODO: Boucle sur les 3 derniers articles

function lastPosts(){

}


// TODO: Affichage d'un article dans la page article.php

