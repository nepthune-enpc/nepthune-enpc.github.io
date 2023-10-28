---
permalink: /auth/le_projet/
layout: default_auth
redirect_from:
    - /auth/le_projet/
    - /auth/le_projet.html
title: Le Projet Nepthune
---


<html>
<div class="content">
<h2>La genèse du projet</h2>
<p>Le projet Nepthune est né avec le constat du manque d’outils pour les étudiants en France pour trouver un dispositif d’aide financière adéquat.</p>

<h2>Les valeurs du projet</h2>
<ul>Le projet s’appuie sur trois grandes valeurs :
    <li>La transparence</li>
    <li>L’équité</li>
    <li>La sécurité des données</li>
</ul>
<h2>Le planning du projet</h2>
<p>Le déploiement de Nepthune s’effectue en plusieurs échelons. Un premier prototype 
doit être testé à la rentrée 2023 pour les étudiants des Ponts et Chaussées issus du concours commun. 
Après itération du modèle, un pilote sera effectué sur un regroupement 
d’écoles d’ingénieurs (ParisTech ou IP), puis un pilote grande échelle 
sur une université d’Ile-de-France avant déploiement au niveau national. 
puis un développement d’outils pour étudiants étrangers venant étudier en France.</p>
</div>

</html>

@REM <div class="container" id="i18_career">
@REM https://github.com/jarrekk/Jalpc/blob/master/_includes/sections/career.html
@REM     <div class="row">
@REM         <div class="col-lg-12 text-center">
@REM             <div class="navy-line"></div>
@REM             <h1><span data-i18n="career.my_career">My Career</span></h1>
@REM         </div>
@REM     </div>
@REM     <div class="row features-block">
@REM         <div class="col-lg-12">
@REM             <div id="vertical-timeline" class="vertical-container light-timeline center-orientation">
@REM             {% for career in site.data.index.careers %}
@REM             {% assign loopindex = forloop.index | modulo: 2 %}
@REM                 <div class="vertical-timeline-block">
@REM                     <div class="vertical-timeline-icon {% if career.present ==  true %} navy-bg-present {% else %} navy-bg {% endif %} wow rotateIn">
@REM                         <i class="fa {{ career.icon }}"></i>
@REM                     </div>
@REM                     <div class="vertical-timeline-content wow {% if loopindex == 1 %} rotateInUpRight {% else %} rotateInUpLeft {% endif %}">
@REM                         <h2><span data-i18n="career.{{ career.name.i18n }}">{{ career.name.detail }}</span></h2>
@REM                         <p><span data-i18n="career.{{ career.desc.i18n }}">{{ career.desc.detail }} </span></p>
@REM                         <span class="vertical-date"><span data-i18n="career.{{ career.date.i18n }}"> {{ career.date.detail }} </span>
@REM                         <br/> <small><span data-i18n="career.{{ career.job.i18n }}">{{ career.job.detail }}</span></small> </span>
@REM                     </div>
@REM                 </div>
@REM             {% endfor %}
@REM             </div>
@REM         </div>
@REM     </div>
@REM </div>