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

<div class="grid-container">
    {% for bourse in site.bourses %}
        {% include single-bourse.html %}
    {% endfor %}
</div>


<style>
.grid-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 20px;
}
</style>
