<?php $date = new DateTime(); ?>
<main class="main-commandes container py-5">
  <h2 class="mb-4">Historique des commandes</h2>

  <div class="table-responsive">
    <table class="table table-hover align-middle">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID#</th>
          <th scope="col">Date de commande</th>
          <th scope="col">Produit</th>
          <th scope="col">Total</th>
          <th scope="col">Statut</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($orders as $order): ?>
        <tr>
          <th scope="row"><?php echo $order["id_reservation"]; ?></th>
          <td><?php echo $order["date_reservation"]; ?></td>
          <td><?php echo $order["marque"]. " " .$order["modele"] ?></td>
          <td><?php echo number_format($order["prix"], 0, ",", " ") . " €"; ?></td>
          <?php 
          if (new DateTime($order["fin_location"]) > $date) {
            echo "<td><span class=\"badge bg-success\">En cours</span></td>";
          } else {
            echo "<td><span class=\"badge bg-danger\">Passée</span></td>";
          }
          ?>
          <td>
            <button class="btn btn-sm btn-outline-primary">Détails</button>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</main>
