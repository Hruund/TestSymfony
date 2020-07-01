<!-- Gestion des abonnements, vues sur tous les abonnements !-->

<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Vos abonnement</h1>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Date début</th>
        <th scope="col">Type</th>
        <th scope="col">Prix</th>
        <th scope="col">Date fin</th>
      </tr>
    </thead>
    <tbody>
        
    <?php

    while($row = $AllAbo->fetch(PDO::FETCH_ASSOC))
    {
        echo '<tr>';
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["DateMiseEnPlace"]."</td>";
        echo "<td>".$row["TypeAbo"]."</td>";
        echo "<td>".$row["PrixMensuel"]."</td>";
        echo "<td>".$row["DateFinPromo"]."</td>";
        echo '</tr>';
    }
    ?>

    </tbody>
  </table>