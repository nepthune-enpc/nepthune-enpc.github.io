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
  {% include single-bourse.html liste_des_bourses=liste_bourses %}
{% endif %}
