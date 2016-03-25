<?php
// Contrôleur Général

include_once('controleur/connexion_sql.php');

include_once('modele/maintenance/maintenance.php');

// Redirection maintenance
global $resultat;

if ($resultat['etat'] == "maintenance"){
    include_once('controleur/maintenance/index.php');
}   else{
    echo "Hello World !";
}