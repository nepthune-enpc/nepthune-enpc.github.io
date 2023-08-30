---
permalink: /
redirect_from:
    - /about/
    - /about.html
layout: default_auth
title: Bienvenue sur Nepthune !
---
{% include base_path %}


<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>
    <div class="container" style="">
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
<style>
    div.container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        align-items: center;
        justify-content: center;
    }

</style>