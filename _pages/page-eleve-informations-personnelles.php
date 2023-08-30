---
permalink: /infos-persos.html  
layout: accueil
redirect_from:
    - /page-eleve-informations-personnelles/
    - /page-eleve-informations-personnelles.html
    - /page-eleve-informations-personnelles.php
title: Mes données personnelles
---

{% include base_path %}


<html>
    <h2>Vos Informations: </h2>
<body>
Nom: <?php echo $_POST["surname"]; ?>
<br>
Prénom: <?php echo $_POST["name"]; ?>
<br>
Date de Naissance: <?php echo $_POST["birthday"]; ?>
<br>
Adresse: <?php echo $_POST["address"]; ?>
<br>
Numéro de téléphone: <?php echo $_POST["phone"]; ?>
<br>
Adresse mail: <?php echo $_POST["email"]; ?>
<br>
</body>
</html>
