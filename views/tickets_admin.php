<main class="main-tickets-admin container py-5">
  <h2 class="mb-4">Tickets client</h2>

  <div class="table-responsive">
    <table class="table table-hover align-middle">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID#</th>
          <th scope="col">Titre</th>
          <th scope="col">Nom & Prénom</th>
          <th scope="col">Mail</th>
          <th scope="col">Sujet</th>
          <th scope="col">Message</th>
          <th scope="col">Statut</th>
          <th scope="col">Définir un statut</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($tickets as $ticket): ?>
        <tr>
          <th scope="row"><?php echo $ticket["id_support"]; ?></th>
          <td><?php echo $ticket["titre"]; ?></td>
          <td><?php echo $ticket["nom"] ?></td>
          <td><?php echo $ticket["mail"] ?></td>
          <td><?php echo $ticket["sujet"]; ?></td>
          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#support-<?= $ticket["id_support"]; ?>">
            Voir le message
            </button>
            <div class="modal fade" id="support-<?= $ticket["id_support"]; ?>" tabindex="-1" aria-labelledby="supportLabel-<?= $ticket["id_support"]; ?>" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-4" id="supportLabel-<?= $ticket["id_support"]; ?>">Message du client</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <?= ($ticket["message"]) ?>
                    </div>
                </div>
                </div>
            </div>
          </td>
          <td><?php echo "Prout"; ?></td>
          <td>
            <button class="btn btn-sm btn-outline-warning">En Cours</button>
            <button class="btn btn-sm btn-outline-danger">Fermé</button>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</main>
