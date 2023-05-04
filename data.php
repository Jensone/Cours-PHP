<?php
/**
 * Page de traitement des données du fichier articles.json
 */

/**
 * DONE: On inclut le fichier articles.json
 * @return void
 */

define( // Définition de la constante ARTICLES
    'ARTICLES', // Nom de la constante
    json_decode(file_get_contents( // Décode le fichier articles.json
        __DIR__ . '/assets/articles.json' // Chemin du fichier articles.json
    ), true) // true pour tableau associatif
); // Fin de la définition de la constante ARTICLES

/**
 * DONE: Boucles sur les articles
 * @return void
 */

function allPosts() // Fonction pour afficher tous les articles
{
    $articles = constant('ARTICLES'); // Récupération de la constante ARTICLES
    foreach ($articles as $valeur) { // Boucle sur les articles du tableau associatif
        echo '<div class="card col-md-3 col-sm-12">'; // Début de la carte
        echo '<img src="/assets/img/' . $valeur['id'] . '.jpeg" class="card-img-top mt-2 rounded" alt="' . $valeur['titre'] . '">'; // Image de la carte
        echo '<div class="card-body">'; // Début du corps de la carte
        echo '<h4 class="card-title">' . $valeur['titre'] . '</h4>'; // Titre de la carte
        echo '<p class="card-text fs-6">' . substr($valeur['contenu'], 0, 100) . '...</p>'; // Contenu de la carte
        echo '<a href="/article.php?id=' . $valeur['id'] . '" class="btn btn-warning rounded-5">Lire la suite</a>'; // Bouton de la carte
        echo '</div></div>'; // Fin du corps de la carte avec les 2 div imbriquées
    } // Fin de la boucle foreach
} // Fin de la fonction allPosts

// TODO: Boucle sur les 3 derniers articles


/**
 * DONE: Affichage d'un article dans la page article.php
 * @param int $id
 * @return void
 */

function singlePost(int $id)
{
    $articles = constant('ARTICLES'); // Récupération de la constante ARTICLES
    var_dump($articles[$id]); // Affiche l'article avec l'id correspondant
}

// Redirige vers la page d'accueil si un utilisateur tente d'accéder à la page data.php
if (basename($_SERVER['PHP_SELF']) == 'data.php') { // Si l'URL est data.php
    header('Location: /'); // Redirection vers la page d'accueil
    exit(); // Arrêt du script
} // Fin du if