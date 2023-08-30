---
permalink: /modif-infos-persos.html
layout: accueil
redirect_from:
    - /page-eleve-informations-personnelles-modif/
    - /page-eleve-informations-personnelles-modif.php
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
    padding-right: 0px;
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
$surname = $name = $birthday = $email = $studies = $comment = $address = "";
$phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $surname = test_input($_POST["surname"]);
  $birthday = test_input($_POST["birthday"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $phone = test_input($_POST["phone"]);
  $comment = test_input($_POST["comment"]);
  $educ_level = test_input($_POST["studies"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>

<h2>Mes données Personnelles</h2>
<form method="post" target="_self" accept-charset="utf-8">  
<table>
    <tr>
      <td>Nom:</td>
      <td><input type="text" id="surname" name="surname"></td>
    </tr>
    <tr>
      <td>Prénom:</td>
      <td><input type="text" id="name" name="name"></td>
    </tr>
    <tr>
      <td>Date de naissance:</td>
      <td><input type="text" id="birthday" name="birthday"></td>
    </tr>
    <tr>
      <td>Adresse:</td>
      <td><input type="text" id="address" name="address"></td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td><input type="text" id="email" name="email"></td>
    </tr>
    <tr>
      <td>Numéro de téléphone:</td>
      <td><input type="text" id="phone" name="phone"></td>
    </tr>
  <tr>
    <td>Comment: </td>
    <td><textarea name="comment" id= rows="5" cols="40"></textarea></td> 
  </tr>
  <tr></tr>
  <tr style="display:block;">
  <td style="padding-right:10px;">Niveau d'études: </td>
  <td><input type="radio" id="studies" name="studies" value="BTS">BTS</td>
  <td><input type="radio" id="studies" name="studies" value="BEP">BEP</td>
  <td><input type="radio" id="studies" name="studies" value="CAP">CAP</td>
  <td><input type="radio" id="studies" name="studies" value="L1">Licence 1</td>
  <td><input type="radio" id="studies" name="studies" value="L2">Licence 2</td>
  <td><input type="radio" id="studies" name="studies" value="L3">Licence 3</td>
  <td><input type="radio" id="studies" name="studies" value="M1">Master 1</td>
  <td><input type="radio" id="studies" name="studies" value="M2">Master 2</td>
  <td><input type="radio" id="studies" name="studies" value="Doctorant">Doctorat</td>
  <td><input type="radio" id="studies" name="studies" value="other">Autres</td>
</tr>
</table>
  <input type="submit"  name="submit" value="Sauvegarder">
  <input type="button"  name="suivant" value="Page Suivante">  
</form>
</body>
</html>
