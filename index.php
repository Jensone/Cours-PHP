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
                <h1>Accueil ZeBlog</h1>
                <h2>L'actu sur la tech</h2>
                
                <div class="row">
                    <hr>
                    <h3 class="text-center">Lisez nos articles</h3>
                    <div class="row gap-3 justify-content-center">
                        
                        <div class="card col-md-3 col-sm-12">
                            <img src="https://placeholder.com/400" class="card-img-top mt-2 rounded" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text fs-6">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary rounded-5">Go somewhere</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <footer>
                <p>&copy; ZeBlog</p>
            </footer>
        </main>

<!-- Chargement du fichier _footer.php -->
<?php include dirname(__FILE__) . '/partials/_footer.php'; ?>


