<?php
// Aucune durée indiquée
if (empty($resultat['duree'])){
    $resultat['duree'] = "un moment";
}

include_once('vue/maintenance/maintenance.php');