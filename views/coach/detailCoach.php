<div>
    <h1> detail Coach</h1>
</div>

<?php include('controller/coach/detailcoach.php');?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Domaine</th>
      <th scope="col">Disponibilité</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row"><?php echo $detailCoach['id']; ?></th> <!--affichage de l'id du coach -->
      <td><?php echo $detailCoach['nom']; ?></td>
      <td><?php echo $detailCoach['prenom']; ?></td>
      <td><?php echo $detailCoach['email']; ?></td>
      <td><?php echo $detailCoach['telephone']; ?></td>
      <td><?php echo $detailCoach['domaine']; ?></td>
       <td><?php echo $detailCoach['disponible']; ?></td>
    </tr>
  </tbody>
</table>