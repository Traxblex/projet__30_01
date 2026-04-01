<?php
include('../../BDD/bdd.php');
    var_dump($_POST);

    if (isset($_POST['valider'])) {
        # code ....
        $disponible = $_POST['disponible'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $domaine = $_POST['domaine'];

        $req = $bdd->prepare('INSERT INTO coach (disponible, nom, prenom, email, telephone, domaine) values (:disponible, :nom, :prenom, :email, :telephone, :domaine)');

        $req ->bindParam(':disponible',$disponible); 
        $req ->bindParam(':nom',$nom); 
        $req ->bindParam(':prenom',$prenom); 
        $req ->bindParam(':email',$email); 
        $req ->bindParam(':telephone',$telephone); 
        $req ->bindParam(':domaine',$domaine); 
        $req->execute();

        header('location:http://127.0.0.1/Promo321/info/cours_info_shapeche/projet__30_01/index.php?page=membre');



    }
?>

