---
permalink: /modif-infos-persos.html
layout: accueil
redirect_from:
    - /page-eleve-informations-personnelles-modif/
    - /page-eleve-informations-personnelles-modif.php
title: Mes données personnelles
---
  
<html>
<style>
  table {
    vertical-align: text-top;
  }
  input[type=submit] {
    border: none;
    outline: none;
    color: #fff;
    background-color: #142388;
    padding: 0.95rem 1.5rem;
    cursor: pointer;
    border-radius: 0.312rem;
    font-size: 0.8rem;
    /* display: block; */
    width: 150px;
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

<form method="post" action="./page-eleve-informations-personnelles.php">  
<table>
    <tr>
      <td>Nom:</td>
      <td><input type="text" name="surname"></td>
    </tr>
    <tr>
      <td>Prénom:</td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td>Date de naissance:</td>
      <td><input type="text" name="birthday"></td>
    </tr>
    <tr>
      <td>Adresse:</td>
      <td><input type="text" name="address"></td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td><input type="text" name="email"></td>
    </tr>
    <br><br>
    <tr>
      <td>Numéro de téléphone:</td>
      <td><input type="text" name="phone"></td>
    </tr>
  <tr>
    <td>Comment: </td>
    <td><textarea name="comment" rows="5" cols="40"></textarea></td> 
  </tr>
  <tr style="display:flex;">
  <td>Niveau d'études: </td><br><br>
  <td><input type="radio" name="studies" value="BTS">BTS</td>
  <td><input type="radio" name="studies" value="BEP">BEP</td>
  <td><input type="radio" name="studies" value="CAP">CAP</td>
  <td><input type="radio" name="studies" value="L1">Licence 1</td>
  <td><input type="radio" name="studies" value="L2">Licence 2</td>
  <td><input type="radio" name="studies" value="L3">Licence 3</td>
  <td><input type="radio" name="studies" value="M1">Master 1</td>
  <td><input type="radio" name="studies" value="M2">Master 2</td>
  <td><input type="radio" name="studies" value="Doctorant">Doctorat</td>
  <td><input type="radio" name="studies" value="other">Autres</td>
</tr>
</table>
  <input type="submit" name="submit" value="Sauvegarder">  
</form>
</body>
</html>
