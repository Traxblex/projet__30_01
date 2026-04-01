<?php include('controller/coach/AllCoach.php');?>
<div>
    <h1> page Coach</h1>
</div>

<div>
  <a href="index.php?page=ajouterCoach">Ajouter Coach</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">domaine</th>
       <th scope="col">disponibilité</th>
       <th scope="col">action</th>
    </tr>
    </tr>
  </thead>
  <tbody>
    <?php foreach($allcoach as $coach){ ?>
    <tr>
      <th scope="row"><?php echo $coach['id']; ?></th> <!--affichage de l'id du coach -->
      <td><?php echo $coach['nom']; ?></td>
      <td><?php echo $coach['prenom']; ?></td>
      <td><?php echo $coach['email']; ?></td>
      <td><?php echo $coach['telephone']; ?></td>
      <td><?php echo $coach['domaine']; ?></td>
       <td><?php echo $coach['disponible']; ?></td>
       <td><a href="index.php?page=detailCoach&id=<?php echo $coach['id']; ?>">detail</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>