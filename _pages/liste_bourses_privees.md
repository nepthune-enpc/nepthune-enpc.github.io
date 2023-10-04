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

{% assign pub_bourses = site.bourses | where: "tags",  'privee' %}

<div class="grid-container hover01">
    {% for bourse in pub_bourses %}
        {% include single-bourse.html %}
    {% endfor %}
</div>


<style>
.grid-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
  padding: 100px 100px;
}
</style>
