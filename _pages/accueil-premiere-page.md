---
permalink: /
redirect_from:
    - /about/
    - /about.html
layout: default
title: Bienvenue sur Nepthune !
---
{% include base_path %}


<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>
    <div class="container">
        <h1>Vous êtes ...</h1>
        <br><br>
        <div class="text-center">
            <button class="form__button" type="submit" onClick="location.href='./authentification-eleve.html';">Un élève</button>
            <br><br>
            <button class="form__button" type="submit" onclick="location.href='./authentification-universite.html';">Une université</button>
            <br><br>
            <button class="form__button" type="submit" onclick="location.href='./authentification-partenaire.html';">Un partenaire</button>
            <br>
        </div>
    </div>
</body>
</html>