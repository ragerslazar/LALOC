<main class="main-louer">
    <div class="row">
        <div class="col-sm-4">
            <h3>Filtres:</h3>
            <form action="louer" method="get">
                <?php foreach ($filtres as $filtre): ?>
                    <h5><?= $filtre["nom"] ?></h5>
                    <?php 
                    $sousFiltresAssocies = array_filter($sousFiltres, function($sousFiltre) use ($filtre) {
                        return $sousFiltre['id_filtre'] == $filtre['id_filtre'];
                    });
                    foreach ($sousFiltresAssocies as $sousFiltre): ?>
                        <label for="filtre-<?= $sousFiltre['id_sousfiltre'] ?>"><?= $sousFiltre['nom'] ?></label>
                        <input type="checkbox" id="filtre-<?= $sousFiltre['id_sousfiltre'] ?>" name="<?= $filtre['nom'] ?>" value="<?= $sousFiltre['nom'] ?>"><br>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <p class="text-muted">(Inferieur à)</p>
                <button type="submit" class="btn btn-primary">Filtrer</button>
            </form>
        </div>
        <div class="col-sm-8">
            <?php foreach ($vehicules as $engine): ?>
                <div class="card" style="width: 18rem;">
                    <img src="./img/services/img1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $engine["marque"]. " " .$engine["modele"] ?></h5>
                        <p class="card-text">💶 Prix: <?php echo number_format($engine["prix"], 0, ",", " ") . "€" ?></p>

                        <a href="details?vehicule=<?php echo $engine["id_vehicule"] ?>" class="btn btn-primary">Details</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>


