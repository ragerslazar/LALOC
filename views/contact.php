<main class="main-contact">
    <div class="container text-center">
        <h1>Un problème, une question avec nos services ? Dites-nous tout.</h1>
        <p>Remplissez le formulaire ci-dessous et nous reviendrons vers vous dans les plus bref délais.</p>
        <div class="forumaire-contact text-start">
        <form action="traitement_contact.php" method="post">
            <div class="mb-3">
                <label for="civilite">Titre :</label>
                <select class="form-select form-select-sm" name="civilite" id="contactCivilite" aria-label="Small select example">
                    <option selected>Veuillez choisir...</option>
                    <option value="mo">Monsieur</option>
                    <option value="ma">Madame</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nom">Nom & Prénom</label>
                <input type="text" class="form-control" name="contactNom" id="contactNom" placeholder="Réaumur Sebastopol" required>
            </div>

            <div class="mb-3">
                <label for="email">Adresse électronique :</label>
                <input type="email" class="form-control" name="contactEmail" id="contactEmail" placeholder="name@example.com" required>
            </div>

            <div class="mb-3">
                <label for="contactSujet">Sujet :</label>
                <input type="text" class="form-control" name="contactSujet" id="contactSujet" placeholder="De quoi s'agit-il ?" required>
            </div>

            <div class="mb-3">
                <label for="contactMessage">Message</label>
                <textarea class="form-control" placeholder="Décrivez votre question, problème..." name="contactMessage" id="contactMessage" style="height: 100px"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>

        </div>
    </div>
</main>