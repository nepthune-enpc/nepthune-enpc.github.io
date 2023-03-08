---
permalink: /infos-persos.html
layout: accueil
redirect_from:
    - /page-eleve-informations-personnelles/
    - /page-eleve-informations-personnelles.html
title: Mes données personnelles
---

<!-- <style>
    .change_button {
        border: none;
        outline: none;
        color: #fff;
        background-color: #1773e8;
        padding: 0.95rem 1.5rem;
        cursor: pointer;
        border-radius: 0.312rem;
        font-size: 1.2rem;
        display: block;
        width: 300px;
    }
</style> -->
<html>
<input type="submit" onClick="Modify()" id="modifier-infos" name="modifier-infos" value="Modifier mes informations">
<script>
    $(function() { $('modifier-infos').click(function(){window.location.replace("{{ base_path }}/modif-infos-persos.html");});});
</script>
</html>

<?php


echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
