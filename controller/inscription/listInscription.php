<?php
    include("BDD/bdd.php");
    $req = $bdd->prepare("SELECT sport.libelle, membres.nom, membres.prenom, inscription.id, inscription.date_inscription 
FROM inscription, sport, membres 
WHERE inscription.sport = sport.id 
AND   inscription.membre = membres.id order by id ASC");
    $req->execute();

    $allInscrit = $req->fetchall();
