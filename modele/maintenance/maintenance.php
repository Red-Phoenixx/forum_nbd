<?php

$req = $bdd->query('SELECT etat, duree FROM log WHERE ID = (SELECT MAX(ID) FROM log)');
$resultat = $req->fetch();