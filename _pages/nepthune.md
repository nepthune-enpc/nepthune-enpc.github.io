---
layout: accueil
title: Nepthune, c'est
permalink: /nepthune.html
---
<style>
    .references {
        position: absolute;
        text-align:right;
        font-family: "Poppins", sans-serif;
        color: #3f4750;
        text-decoration: italic;
    }
    #reset {
        color:#eeeeee;
        border: none;
        padding: 0.5em 0.5em;
        background-color: rgb(7,58,104);
        font-family: "Poppins", sans-serif;
        display: inline-block;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;

        border-radius: 0.25rem;
        width: 5%;
        float: right;
    }

</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<html>
{% include counting_script.html %}
    <div class="website-counter"></div> <br><p> visites du site depuis sa création.</p><br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button id="reset">Reset</button>
    </div>
    <br><br>
    <ul>
     <li>XX bourses appariées avec un élève</li>
      <li>XX bourses en ligne</li>
    </ul>
    <ul>
        <li>XX établissements inscrits</li>
        <li>XX élèves inscrits</li>
        <li>XX partenaires ayant déposé une bourse</li>
    </ul>
</html>

