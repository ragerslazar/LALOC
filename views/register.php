<main class="main-register">
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <?php 
            if ($status == "OK") {
                echo "
                <div class=\"alert alert-success text-center\" role=\"alert\">
                    <p>Inscription effectuée avec succès !</p>
                </div>
                ";
            } elseif ($status == 23000) {
                echo "
                <div class=\"alert alert-danger text-center\" role=\"alert\">
                    <p>Cette adresse email est déjà utilisée !</p>
                </div>
                ";
            } elseif ($status == "values_missing") {
                echo "
                <div class=\"alert alert-danger text-center\" role=\"alert\">
                    <p>Des données sont manquantes !</p>
                </div>
                ";
            }
            ?>
            <div class="formulaire-login" style="padding: 1.3rem">
                <div class="mb-3 text-center">
                    <h1>Création d'un compte client</h1>
                </div>
                <form action="register?action=form_submit" method="post">
                    <div class="mb-3">
                        <label for="civilite">Titre :</label>
                        <select class="form-select form-select-sm" name="registerCivilite" id="registerCivilite" required="required" aria-label="Small select example">
                            <option value="" selected>Veuillez choisir...</option>
                            <option value="mo">Monsieur</option>
                            <option value="ma">Madame</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" name="registerNom" id="registerNom" placeholder="Sebastopol" required>
                    </div>

                    <div class="mb-3">
                        <label for="nom">Prénom :</label>
                        <input type="text" class="form-control" name="registerPrenom" id="registerPrenom" placeholder="Réaumur" required>
                    </div>

                    <div class="mb-3">
                        <label for="nom">Adresse :</label>
                        <input type="text" class="form-control" name="registerAdresse" id="registerAdresse" placeholder="10 rue du Faubourg Saint-Honoré" required>
                    </div>

                    <div class="mb-3">
                        <label for="nom">Ville :</label>
                        <input type="text" class="form-control" name="registerVille" id="registerVille" placeholder="Paris" required>
                    </div>

                    <div class="mb-3">
                        <label for="nom">Code Postale :</label>
                        <input type="text" class="form-control" name="registerCP" id="registerCP" placeholder="75008" required>
                    </div>

                    <div class="mb-3">
                        <label for="email">Adresse électronique :</label>
                        <input type="email" class="form-control" name="registerEmail" id="registerEmail" placeholder="name@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="email">Mot de passe :</label>
                        <input type="password" class="form-control" name="registerPwd" id="registerPwd" placeholder="Mot de passe" required>
                    </div>
                    
                    <div class="mb-3 text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Inscription</button>
                    </div>
                </form>
                <p style="margin-bottom: 0;">Vous possédez déjà un compte ? <a href="login">Conntectez-vous !</a></p>
            </div>
        </div>
    </div>
</main>