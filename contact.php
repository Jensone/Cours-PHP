<?php

// Chargement du fichier _head.php
include dirname(__FILE__) . '/partials/_head.php';

// Chargement du fichier _aside.php
include dirname(__FILE__) . '/partials/_aside.php';

// Traitement du formulaire
if (isset($_POST['message'])) {
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: webmaster@celestin.deploiement.dev' . "\r\n";
    $entete .= 'Reply-to: ' . $_POST['email'];

    $message = '<h1>Message envoyé depuis la page Contact de mon site</h1>
    <p><b>Email : </b>' . $_POST['email'] . '<br>
    <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

    $retour = mail(
        'hello@agiliteach.org', // Destinaire
        'Envoi depuis page Contact', // Message principale
        $message, // Contenu
        $entete // Entete
    );

    if($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
}

?>

<main>
    <section>
        <h1 class="text-center">Contact - ZeBlog</h1>
        <h2 class="text-center">Formulaire de contact</h2>

        <div class="row">
            <hr>
            <form method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nom</span>
                    <input name="expediteur" type="text" class="form-control" placeholder="Nom Prénom" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <label for="" class="">Message</label>
                    <textarea name="message" type="text" class="form-control" placeholder="Votre message" aria-label="Username" aria-describedby="basic-addon1"></textarea>
                </div>
                <input class="btn btn-warning" type="submit" value="Envoyé">
            </form>
        </div>
    </section>
    <footer>
        <p>&copy; ZeBlog</p>
    </footer>
</main>

<!-- Chargement du fichier _footer.php -->
<?php include dirname(__FILE__) . '/partials/_footer.php'; ?>