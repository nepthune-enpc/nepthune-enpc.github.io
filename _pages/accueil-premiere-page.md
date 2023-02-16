---
permalink: /
redirect_from:
    - /about/
    - /about.html
layout: default
title: Bienvenue sur Nepthune !
---
{% include base_path %}

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>
    <div class="container">
        <h2>Vous êtes ...</h2><br>
        <button class="form__button" type="submit" onclick="location.href='{{ base_path }}/authentification-eleve.html';">Un élève</button>
        <br>
        <button class="form__button" type="submit" onclick="location.href='{{ base_path }}/authentification-universite.html';">Une université</button>
        <br>
        <button class="form__button" type="submit" onclick="location.href='{{ base_path }}/authentification-partenaire.html';">Un partenaire</button>
        <br>
    </div>
</body>