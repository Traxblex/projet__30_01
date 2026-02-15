<?php
include("BDD/bdd.php");

$req = $bdd->prepare("SELECT * FROM sport");
$req->execute();

$allsport = $req->fetchAll(); //


?>