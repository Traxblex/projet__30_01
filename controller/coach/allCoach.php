<?php
include('BDD/bdd.php');
$req = $bdd->prepare("SELECT * FROM coach");
$req->execute();

$allcoach = $req->fetchAll();


?>