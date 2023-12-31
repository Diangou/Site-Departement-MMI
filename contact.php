<?php
    $couleur_bulle_classe = "jaune";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT - CY Cergy Paris Université</title>
    <link rel="icon" href="ressources/images/favicon-GEC_400x400px.png" type="image/x-icon">

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">

    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>


        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">

        <h1 class="titre-page">Plus d'infos sur la formation ? <br /> Contactez-nous !</h1>

<section>
    <p class="paragraphe">
        <span class="texte-gras">La formation s'ouvre à tous les bacheliers.</span> Avoir des connaissances en programmation, design ou encore audiovisuel n'est pas obligatoire mais reste un bon atout, car il faut aimer la curiosité dans cette formation pluridisciplinaire. <span class="texte-gras">Il est également possible de faire la formation après une reprise d'études ou une réorientation.</span>
    </p>
</section>

<h1 class="titre-page">Nous contacter en ligne</h1>

<form action="" method="POST" class="formulaire-contact">
    <article class="champ-conteneur">
        <label for="prenom" class="label-champ texte-gras">Prénom</label>
        <input type="text" class="champ" name="prenom" id="prenom">
    </article>
    <article class="champ-conteneur">
        <label for="nom" class="label-champ texte-gras">Nom de famille</label>
        <input type="text" class="champ" name="nom" id="nom">
    </article>
    <article class="champ-conteneur">
        <label for="email" class="label-champ texte-gras">Adresse e-mail</label>
        <input type="email" class="champ" name="email" id="email">
    </article>

    <article class="champ-conteneur">
        <label for="message" class="label-champ texte-gras">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" class="champ"></textarea>
    </article>

    <article class="champ-conteneur">
        <p class="label-champ texte-gras">Je suis</p>
        <ul class="liste-choix">
            <li class="choix">
                <input type="radio" name="je_suis" id="pas_precise" value="pas_precise">
                <label for="pas_precise">Je ne souhaite pas le préciser</label>
            </li>
            <li class="choix">
                <input type="radio" name="je_suis" id="etudiant" value="etudiant">
                <label for="etudiant">Étudiant / Étudiante</label>
            </li>
            <li class="choix">
                <input type="radio" name="je_suis" id="parent" value="parent">
                <label for="parent">Parent</label>
            </li>
            <li class="choix">
                <input type="radio" name="je_suis" id="autre" value="autre">
                <label for="autre">Autre</label>
            </li>
        </ul>
    </article>
    <article class="champ-conteneur">
        <button type="submit" class="btn-envoi texte-gras">
            ENVOYER
        </button>
    </article>
</form>

<h1 class="titre-page">Nous contacter par courrier</h1>
<p class="paragraphe">
    IUT de Cergy-Pontoise,<br>
    Département Métiers du Multimédia et de l’Internet (MMI) <br>
    34 Bis Boulevard Henri Bergson <br>
    95200 Sarcelles
</p>

            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
        </main>
    </section>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>

</html>