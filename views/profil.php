<main class="main-profil d-flex justify-content-center">
    <div class="container mt-5">
        <?php
        if (isset($_SESSION["password_verification_error"])) {
            $message = $_SESSION["password_verification_error"];
            echo "
            <div class=\"alert alert-dismissible fade show bg-danger-subtle text-center\" role=\"alert\">
                <strong>Erreur !</strong> $message !
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
            ";
            unset($_SESSION["password_verification_error"]);
        }
        ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center">🔑 Réinitialisation du mot de passe</h3>
                <form action="profil" method="post">
                    <div class="mb-3">
                        <label for="old-password" class="form-label">Ancien mot de passe</label>
                        <input type="password" class="form-control" id="old-password" name="old-password" placeholder="Entrez votre ancien mot de passe">
                    </div>
                    <div class="mb-3">
                        <label for="new-password" class="form-label">Nouveau mot de passe</label>
                        <input type="password" class="form-control" id="new-password" name="new-password" placeholder="Entrez votre nouveau mot de passe">
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirmez votre nouveau mot de passe">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Réinitialiser</button>
                </form>
            </div>
        </div>
    </div>
</main>