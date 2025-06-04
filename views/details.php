<main class="main-details">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h4>Détaille du produit</h4>

                <img src="./img/annonces/<?php echo $details["img"]; ?>" class="img-annonce"/>
                <p>ID: <?php echo $details["id_vehicule"];?></p>
                <p><u>Marque</u>: <?php echo $details["marque"];?></p>
                <p><u>Modèle</u>: <?php echo $details["modele"];?></p>
                <p  ><u>Immatriculation</u>: <?php echo $details["immatriculation"];?></p>
                <p><u>Chevaux fiscaux</u>: <?php echo $details["chevaux_fiscaux"];?></p>
                <p><u>Kilométrage</u>: <?php echo $details["km"];?></p>
                <p><u>Début de location</u>: <?php echo date("d-m-Y", strtotime($details["debut_loc"]));?></p>
                <p><u>Fin de location</u>: <?php echo date("d-m-Y", strtotime($details["fin_loc"]));?></p>
                <p><u>Situé au</u>: <?php echo $garageInfo["adresse"]. " - ". $garageInfo["nom"] ?></p>
                <h5><u>Prix</u>: <?php echo number_format($details["prix"], 0, ",", " ") . " €";?></h5>
            </div>

            <div class="col-md-6">
                <h4>Procéder au paiement</h4>
                <?php
                if (isset($_SESSION["user"])) {
                    $vehicule = $details["id_vehicule"];
                    echo "
                    <div class='pay_method'>
                        <a href='order?method=cb&vehicule=$vehicule' class='btn btn-primary'>Paiement par Carte Bleu</a>
                        <a href='order?method=ch&vehicule=$vehicule' class='btn btn-primary'>Paiement par chèque</a>
                    </div>
                    ";
                } else {
                    echo "<p>Vous devez être <a href='login'>connecté</a> pour réserver ce véhicule.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</main>