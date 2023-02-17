---
permalink: /authentification-universite.html
redirect_from:
    - /accueil-authentification-universite/
    - /accueil-authentification-universite.html
title: S'authentifier
---

{% include base_path %}

<html lang="fr">
<head>
  <script src="https://apis.google.com/js/api.js?onload=onLibraryLoaded"></script>
    <meta name="google-signin-client_id" content="780974065492-pe6crknvlvmjsta8opn6fa3shjtg6pti.apps.googleusercontent.com">
 </head>
  <body>
      <div class="g-signin2" data-onsucces="onSignIn"></div>
      <button onclick="onSignInClicked()">Sign in with button onClick</button>
      <div id="content"></div>
  </body>
  <script>
    function onLibraryLoaded() {
      gapi.load('auth2', function() {
        gapi.auth2.init({
          client_id: 'YOUR_CLIENT_ID.apps.googleusercontent.com',
          scope: 'profile'
        })
      })
    }
    function onSignInClicked() {
      gapi.load('auth2', function() {
        gapi.auth2.signIn().then(function(googleUser) {
          console.log('user signed in')
            }, function(error) {
                console.log('user failed to sign in')
            })
        })
    }
    function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile()
    if(googleUser.getHostedDomain() !== 'enpc.fr') {
        window.location.replace("{{ base_path }}/page-accueil-valide-universite.html");
    }
    } else {
        alert("Votre nom de domaine de mail ne correspond pas avec l'institution.")
    }
  </script>
</html>