---
permalink: /authentification-partenaire.html
title: S'authentifier
redirect_from:
    - /accueil-authentification-partenaire/
    - /accueil-authentification-partenaire.html
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
  <?php
  // define variables and set to empty values
  $nameErr = $emailErr = "";
  $name = $email = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Le nom du partenaire est requis.";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[0-9a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }
  if (empty($_POST["email"])) {
      $emailErr = "l'adresse-mail du partenaire est requise";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Le format de l'email est invalide.";
      }
    }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>  
  <div class="box">
  <a href="{{base_path}}/accueil-inscription-partenaire.html" text-align="right"> Pas encore inscrit? </a>
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
                  <input type="submit" id="se-connecter" name="se-connecter" value="Se connecter" >
                </form>
                <a href="#"> Mot de passe oublié? </a> 
              </div>  
  </body>
  <script>
    $(function() { $('se-connecter').click(function(){window.location.replace("{{ base_path }}/page-accueil-valide-partenaire.html");});});
  </script>
</html>