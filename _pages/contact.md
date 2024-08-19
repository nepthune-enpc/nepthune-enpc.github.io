---
layout: accueil
title: Nous contacter
permalink: /contact.html
---

<html>
<head>
<style>
* {box-sizing: border-box;}
    .contact-container {
        display: absolute;
        border-radius: 8px;
        background-color: #f1f5fb;
        padding: 3%;
        width: 40%;
        margin-left: 8%;
        margin-top: 5%;
}


.contact-container input[type=text], .contact-container  input[type=email], 
.contact-container  select, 
.contact-container textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 1%;
  margin-bottom: 8%;
  esize: vertical;
}

textarea {
    margin-top: 1%;
    height: 30%;
}

label {
    font-weight: bold;
    margin-bottom: 1%;
}

.contact-container input[type=submit]:hover {
  background-color: rgba(3, 64, 94, 0.85);
}
.contact-container input[type=submit] {
   color: white;
  cursor: pointer;
  border: none;
  border-radius: 4px;
  float: right;
  padding: 2% 4%;
  background-color: rgba(3, 64, 94, 1);
}

</style>
</head>
<body>
<h1>{{ page.title }}</h1>
    <div class="contact-container">
        <form action="https://formspree.io/f/mgejpnqz" method="POST" id="contact" role="submit">
            <label for="fname">
            Nom et Prenom </label><br>
            <input type="text" id="name"  placeholder="Ton nom..">
            
            <label for="email">
            Ton adresse mail</label><br>
            <input type="email" id="email"  placeholder="Ton adresse mail..">
            
        
        <label for="etablissement">
        Etablissement</label><br>
        <select id="etablissement" name="etablissement">
            {% for ecole in site.data.ecoles_es %}
                <option value="{{ ecole.uo_lib }}">{{ ecole.uo_lib }}</option>
            {% endfor %}
        </select>
        
        <label for="subject">
        Un Message pour Nepthune?</label><br>
        <textarea id="subject" name="subject" placeholder="Ecrire quelque chose.." style="height:90%;"></textarea>
        
    <input type="submit" value="Envoyer">
    </form>
    </div>
</body>
</html>