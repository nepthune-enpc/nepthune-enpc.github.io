---
permalink: /authentification-universite.html
layout: 
redirect_from:
    - /accueil-authentification-universite/
    - /accueil-authentification-universite.html
title: S'authentifier
---

{% include base_path %}

<html lang="fr">
<head>
  <script src="https://apis.google.com/js/platform.js"></script>
    <meta name="google-signin-client_id" content="780974065492-pe6crknvlvmjsta8opn6fa3shjtg6pti.apps.googleusercontent.com">
 </head>
  <body>
      <div class="g-signin2" data-onsucces="onSignIn" data-redirecturi="{{ base_path }}/page-accueil-valide-universite.html"></div>
      <div id="content"></div>
  </body>
  <script>
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