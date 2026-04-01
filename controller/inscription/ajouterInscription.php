<?php
include('../../BDD/bdd.php');

    if (isset($_POST['inscrire'])) {
        # code ....
        $membre = $_POST['membre'];
        $sport = $_POST['sport'];
        $date_inscription = $_POST['date_inscription'];

        $req = $bdd->prepare('INSERT INTO inscription (membre, sport, date_inscription) values (:membre, :sport, :date_inscription)');

        $req ->bindParam(':membre',$membre); 
        $req ->bindParam(':sport',$sport);
        $req ->bindParam(':date_inscription',$date_inscription);
        $req->execute();


    header('location:http://127.0.0.1/Promo321/info/cours_info_shapeche/projet__30_01/index.php?page=listInscription');

    }
?>

