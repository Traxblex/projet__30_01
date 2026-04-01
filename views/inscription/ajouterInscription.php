<?php
    include ('controller/membre/listAllMembre.php');
    include ('controller/sport/allSports.php');
    ?>
<div>
    <h1>
        s'inscrire
    </h1>

    <form action="controller/inscription/ajouterInscription.php" method="POST">
    <select name="membre">
        <?php foreach($allMembres as $membre){ ?>
        <option value="<?php echo $membre ["id"] ?> " ><?php echo $membre['nom']; ?> <?php echo $membre['prenom']; ?></option>
        <?php } ?>
    </select>
    <select name="sport">
        <?php foreach($allsport as $sport){ ?>
        <option value="<?php echo $sport ['id'] ?>"><?php echo $sport['libelle']; ?></option>
        <?php } ?>
    </select>
    date d'inscription: <input type="date" name="date_inscription">
    <input type="submit" name="inscrire" name="inscrire">


    </form>
</div>