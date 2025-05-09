<main class="main-dashboard">
  <div class="container py-5">
    <div class="mb-4">
      <h1 class="display-6">Bonjour, <span class="fw-bold"><?php echo $_SESSION["user"][0]["prenom"] ?></span></h1>
      <p class="text-muted">Bienvenue dans votre espace client.</p>
    </div>

    <div class="row g-4">
      <!-- Bloc : Mes réservations -->
      <div class="col-md-6">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Mes Commandes</h5>
            <p class="card-text">Consultez vos réservations en cours, passées ou à venir.</p>
            <a href="commandes" class="btn btn-primary">Voir mes commandes</a>
          </div>
        </div>
      </div>

      <!-- Bloc : Mon profil -->
      <div class="col-md-6">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Mon profil</h5>
            <p class="card-text">Mettez à jour vos informations personnelles et vos préférences.</p>
            <a href="/profil" class="btn btn-outline-primary">Modifier mon profil</a>
          </div>
        </div>
      </div>

      <!-- Bloc : Support / Assistance -->
      <div class="col-md-6">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Besoin d'aide ?</h5>
            <p class="card-text">Accédez à la FAQ ou contactez notre service client.</p>
            <a href="contact" class="btn btn-outline-secondary">Contact</a>
          </div>
        </div>
      </div>

      <!-- Bloc : Déconnexion -->
      <div class="col-md-6">
        <div class="card h-100 shadow-sm border-danger">
          <div class="card-body">
            <h5 class="card-title text-danger">Déconnexion</h5>
            <p class="card-text">Terminez votre session en toute sécurité.</p>
            <a href="logout" class="btn btn-danger">Se déconnecter</a>
          </div>
        </div>
      </div>

      <?php
      if ($_SESSION["user"][0]["type"] == "admin") {
        echo '
        <div class="col-md-6">
          <div class="card h-100 shadow-sm border-danger">
            <div class="card-body">
              <h5 class="card-title text-danger">Support</h5>
              <p class="card-text">Consultez les tickets des clients.</p>
              <a href="tickets_admin" class="btn btn-danger">Tickets</a>
          </div>
        </div>
      </div>
        ';
      }
      ?>
    </div>
  </div>
</main>
