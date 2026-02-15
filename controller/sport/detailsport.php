<?php
include('BDD/bdd.php');
$id = $_GET['id'];
$req = $bdd->prepare("SELECT * FROM sport where id = ?");

$req->execute([$id]);

$detailSport = $req->fetch();


?>