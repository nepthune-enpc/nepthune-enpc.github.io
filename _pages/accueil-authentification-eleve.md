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
                  <button class="form__button" type="submit">Continue</button>
                </form>
                <a href="#"> Mot de passe oublié? </a> 
              </div>
              <div class="container">
        <form class="form" id="login">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Username or email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
        <form class="form form--hidden" id="createAccount">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
</body>
  <script src="./assets/js/authentification_boutons.js"></script>
  <script>
    $(function() { $('se-connecter').click(function(){window.location.replace("{{ base_path }}/page-accueil-valide-partenaire.html");});});
  </script>
</html>