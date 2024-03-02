---
layout: bourse
title: "Liste des Bourses Publiques Existantes"
permalink: /bourses/bourses_publiques
redirect_from:
    - /bourses/bourses_publiques
    - /bourses/bourses_privees
    - /bourses/toutes_les_bourses
entries_layout: grid
---

{% assign liste_bourses = site.data.bourses | where: "type",  'publique' %}

{% if liste_bourses == empty %}
  <p>Desole, aucune offre de bourse ne contient tous vos criteres...</p>
{% else %}
  {% for bourse in liste_bourses %}
      {% include single-bourse.html bourse=bourse%}
  {% endfor %}
{% endif %}
       


<script type="text/javascript">
  function handleSelectChange() {
    const para = document.querySelector("p");
    const sortedGrantSelect = document.getElementById("grants-sort-type");
    const choice= sortedGrantSelect.value;
    if (choice === "newest") {
      para.textContent = " {% assign liste_des_bourses = site.data.bourses  | sort:'date' %}";
    } else if (choice === "oldest") {
      para.textContent ="{% assign liste_des_bourses = site.data.bourses  | sort: 'date' | reverse  %}";
    } else if (choice === "za") {
      para.textContent = "{% assign liste_des_bourses = site.data.bourses  | sort: 'donateur'| reverse %}";
    } else if (choice === "az") {
      para.textContent = "{% assign  liste_des_bourses = site.data.bourses  | sort: 'donateur' %}";
    } else {
      para.textContent = "{% assign  liste_des_bourses = site.data.bourses | sort: 'montant' | reverse %}";
    }
  }
</script>



<style>
   
     .tri-list {
        position: absolute;
        right: 5%;
        max-width: 6%;
        background-color: rgb(201, 240, 252);
        font-size: 11pt;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        color: #333333;
    }
</style>

{% assign pub_bourses = liste_des_bourses | where: "tags",  'publiques' %}

<div class="grid-container hover01">
    {% if pub_bourses == empty %}
        <p>Desole, aucune offre de bourse ne contient tous vos criteres...</p>
    {% else %}
    {% for bourse in pub_bourses %}
        {% include single-bourse.html %}
    {% endfor %}
    {% endif %}
</div>


<style>
.grid-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
  padding: 100px 100px;
}
</style>
