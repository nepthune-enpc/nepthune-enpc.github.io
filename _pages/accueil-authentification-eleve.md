---
permalink: /authentification-eleve.html
layout: default_auth
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
      <a href="./accueil-inscription-eleve.html"><a1 text-align="end">Pas encore inscrit?</a1></a>
      <h1 text-align="center">{{page.title}}</h1>
        <p>Utilisez votre compte Universitaire</p>
            <form onSubmit="onLogin()">
              <div class="inputBox">
                <input type="email" name="email" id="email" required onkeyup="this.setAttribute('value', this.value);"  value="">
                <label>nom d'utilisateur</label>
              </div>
              <div class="inputBox">
                  <input type="text" name="text" id="pwd" required onkeyup="this.setAttribute('value', this.value);" value="">
                  <label>mot de passe</label>
              </div>
                <input type="checkbox" checked="checked" name="souvenir"> Se souvenir de moi
                  <input type="submit" onClick="onLogin()" id="se-connecter" name="se-connecter" value="Se connecter">
                </form>
                <a href='./page-accueil-valide-eleve.html'>shortcut</a>
          </div>
</body>
  <script src="./assets/js/authentification_boutons.js"></script>
  <script>
    function onLogin() {
      var uname = document.getElementById("email").value;
      var pwd = document.getElementById("pwd").value;
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if(uname ==''){
        alert("Un nom est requis.");
      }
      else if(pwd==''){
        	alert("Un mot de passe est requis.");
		  }
      else {
        window.location.replace('./page-accueil-valide-eleve.html');
      }
    }
  </script>
</html>