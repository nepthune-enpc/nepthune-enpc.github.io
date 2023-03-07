---
permalink: /
redirect_from:
    - /about/
    - /about.html
layout: default
title: Bienvenue sur Nepthune !
---
{% include base_path %}

<style>
  .bottom-three {
     text-align: center;
  }
</style>

<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
     <h1 class="bottom-three">Vous êtes ...</h1>   
</head>
<body>
    <div class="container">
        <div class="text-center">
            <button class="form__button" type="submit" onClick="location.href='{{ base_path }}/authentification-eleve.html';">Un élève</button>
            <br><br>
            <button class="form__button" type="submit" onclick="location.href='{{ base_path }}/authentification-universite.html';">Une université</button>
            <br><br>
            <button class="form__button" type="submit" onclick="location.href='{{ base_path }}/authentification-partenaire.html';">Un partenaire</button>
            <br>
        </div>
    </div>
</body>
</html>