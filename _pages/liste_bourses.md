---
layout: bourse
title: Liste des Bourses Existantes
permalink: /bourses/
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
       
