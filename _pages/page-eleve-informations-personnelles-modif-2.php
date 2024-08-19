---
permalink: /modif-infos-persos-2.html
layout: accueil
redirect_from:
    - /page-eleve-informations-personnelles-modif-2/
    - /page-eleve-informations-personnelles-modif-2.php
title: Mes données personnelles
---
  
{% include base_path %}

<html>
<style>
  table {
    vertical-align: text-top;
    width: 60%;
  }
  tr {
    padding-bottom: 10px;
  }
  th, td {
    padding-right: -40px;
  }
  input[type=submit] {
    border: none;
    outline: none;
    color: #fff;
    background-color: #132388;
    padding: 0.75rem 0.8rem;
    cursor: pointer;
    border-radius: 0.312rem;
    font-size: 1rem;
    /* display: block; */
    width: 150px;
  }
  input[type="submit"]:hover {
    background-color: #287ae6;
    box-shadow: 0 1px 1px 0 rgba(66,133,244,0.45), 0 1px 3px 1px rgba(66,133,244,0.3);
  }
  input[type="button"]:hover {
    background-color: #287ae6;
    box-shadow: 0 1px 1px 0 rgba(66,133,244,0.45), 0 1px 3px 1px rgba(66,133,244,0.3);
  }
</style>
<body>  

<?php 
// define variables and set to empty values
$surname = $name = $birthday = $email = $educ_level = $comment = $address = "";
$phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $surname = test_input($_POST["surname"]);
  $birthday = test_input($_POST["birthday"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $phone = test_input($_POST["phone"]);
  $comment = test_input($_POST["comment"]);
  $educ_level = test_input($_POST["gender"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>
<h2>Mes données Personnelles</h2>
<form method="post">  
<table>
    <tr>
      <td><input type="file" id="myFile1" name="Pièce d'identité"></td>
      <td><input type="file" id="myFile2" name="Certificat de scolarité"></td>
      <td><input type="file" id="myFile3" name="Feuille d'imposition"></td>
      <td><input type="file" id="myFile4" name="Diplômes"></td>
    </tr>
</table>
  <input type="submit" name="submit" value="Sauvegarder">
  <input type="button" name="suivant" value="Page Suivante">  
</form>
<script>
    $(function() { $('Sauvegarder').click(function(){window.location.replace("./infos-persos.html");});});
</script>
</body>
</html>
