---
permalink: /modif-infos-persos.html
layout: accueil
redirect_from:
    - /page-eleve-informations-personnelles-modif/
    - /page-eleve-informations-personnelles-modif.php
title: Mes données personnelles
---
  
<html>
<head>
</head>
<body>  

<?php 
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>

<h2>PHP Form Validation Example</h2>
<form method="post">  
  <ul>
  <li>Name: <input type="text" name="name"></li>
  <br><br>
  <li>E-mail: <input type="text" name="email"></li>
  <br><br>
  <li>Website: <input type="text" name="website"></li>
  <br><br>
  <li>Comment: <textarea name="comment" rows="5" cols="40"></textarea></li>
  <br><br>
  <li>Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other</li>
  <br><br>
</ul>
  <input type="submit" name="submit" value="Sauvegarder">  
</form>


</body>
</html>
