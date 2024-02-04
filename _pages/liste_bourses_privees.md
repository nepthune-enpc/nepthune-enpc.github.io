---
layout: bourse
title: "Liste des Bourses Privees Existantes"
permalink: /bourses/bourses_privees
redirect_from:
    - /bourses/bourses_publiques
    - /bourses/bourses_privees
    - /bourses/toutes_les_bourses
entries_layout: grid
---

{% assign liste_bourses = site.data.bourses | where: "type",  'privee' %}


{% for bourse in liste_bourses %}
    {% include single-bourse.html bourse=bourse%}
{% endfor %}



<style>
.grid-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
  padding: 100px 100px;
}
</style>
