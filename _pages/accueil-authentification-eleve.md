---
permalink: /authentification-eleve.html
redirect_from:
    - /accueil-authentification-eleve/
    - /accueil-authentification-eleve.html
title: S'authentifier
---

{% include base_path %}

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/login.css" />
    <title>Document</title>
</head>
<body>
    <div class="box">
      <h2>{{page.title}}</h2>
        <p>Utilisez votre compte Universitaire</p>
            <form>
              <div class="inputBox">
                <input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);"  value="">
                <label>nom d'utilisateur</label>
              </div>
              <div class="inputBox">
                  <input type="text" name="text" required onkeyup="this.setAttribute('value', this.value);" value="">
                  <label>mot de passe</label>
              </div>
                    <input type="checkbox" checked="checked" name="souvenir"> Se souvenir de moi
                  <input type="submit" id="se-connecter" name="se-connecter" value="Se connecter">
                </form>
                <a href="#"> Mot de passe oublié? </a> <button onclick="window.location.replace('{{ base_path }}/page-accueil-valide-partenaire.html');">Continue</button>
              </div>
            </p>
        </form>
    </div>
</body>
  <script src="./assets/js/authentification_boutons.js"></script>
  <script>
    $(function() { $('se-connecter').click(function(){window.location.replace("{{ base_path }}/page-accueil-valide-partenaire.html");});});
  </script>
</html>