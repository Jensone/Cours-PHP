<?php

//  Chargement du fichier data.php pour les données du JSON
require dirname(__FILE__) . '/data.php';

// Chargement du fichier _head.php
include dirname(__FILE__) . '/partials/_head.php'; 

// Chargement du fichier _aside.php
include dirname(__FILE__) . '/partials/_aside.php';
 
?>

        <main>
            <section>
                <h1 class="text-center">Accueil ZeBlog</h1>
                <h2 class="text-center">L'actu sur la tech</h2>
                
                <div class="row">
                    <hr>
                    <h3 class="text-center">Lisez nos articles</h3>
                    <div class="row gap-3 justify-content-center">

                        <?php allPosts(); ?>

                    </div>
                </div>
            </section>
            <footer>
                <p>&copy; ZeBlog</p>
            </footer>
        </main>

<!-- Chargement du fichier _footer.php -->
<?php include dirname(__FILE__) . '/partials/_footer.php'; ?>


