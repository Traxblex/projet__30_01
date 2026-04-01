<h1>Ajouter un Coach</h1>


<form action="controller/coach/ajouterCoach.php" method="POST">

    Nom : <input type="text" name="nom">
    Prenom :  <input type="text" name="prenom">
    Email :  <input type="email" name="email">
    téléphone : <input type="text" name="telephone">
    <div>
disponibilité : 
        disponible: <input type="radio" value="0" name="disponible">
        non disponible: <input type="radio" value="1" name="disponible">
</div>
    domaine : <input type="text" name="domaine">
    <input type="submit" value="ajouter" name= "valider">
</form>