<main class="main-home">
    <div id="carouselHome" class="carousel slide carousel-fade">
        <div class="carousel-message">
            <p style="margin-bottom: 0;">Bienvenue sur LALOC, votre service de location de véhicules !</p>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./img/carousel_home/img1.png" class="d-block w-100" alt="..." id="testimg">
            </div>
            <div class="carousel-item">
            <img src="./img/carousel_home/img2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="./img/carousel_home/img3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="carousel-search">
            <form action="recherche.php" method="GET">
                <label for="dateDebut">Départ :</label>
                <input type="datetime-local" id="dateDebut" name="date_debut" required>

                <label for="dateFin">Retour :</label>
                <input type="datetime-local" id="dateFin" name="date_fin" required>
    
                <button type="button" class="btn btn-primary">Rechercher</button>
            </form>
        </div>
    </div>

    <?php 
    if (isset($_SESSION["loginNeeded"])) {
        $message = $_SESSION["loginNeeded"];
        echo "
        <br>
        <div class=\"container\">
            <div class=\"alert alert-dismissible fade show bg-danger-subtle\" role=\"alert text-center\">
                <strong>Erreur !</strong> $message
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        </div>
        ";
        unset($_SESSION["loginNeeded"]);
    } elseif (isset($_SESSION["permMissing"])) {
        $message = $_SESSION["permMissing"];
        echo "
        <br>
        <div class=\"container\">
            <div class=\"alert alert-dismissible fade show bg-danger-subtle\" role=\"alert text-center\">
                <strong>Erreur !</strong> $message
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        </div>
        ";
        unset($_SESSION["permMissing"]);
    }
    ?>
    
    <section class="home-services">
        <h1 class="text-center">Nos services !</h1> <br>
        <div class="card-services">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Location</h5>
                    <p class="card-text">Transformez votre manière de louer avec la location en tant que service. Profitez de solutions flexibles et pratiques pour accéder à des biens et services sans les contraintes de la propriété. Que ce soit pour des voitures, des équipements ou des espaces, la plateforme vous permet de louer à la demande, quand vous en avez besoin.</p>
                    <p class="card-text">Simplifiez votre quotidien et économisez grâce à un modèle plus agile et économique.</p>
                    <a href="service#section-service" class="btn btn-primary">En savoir plus</a>
                </div>
                <img src="./img/services/img1.jpg" class="card-img-top" alt="...">
            </div>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Rapidité</h5>
                    <p class="card-text">La Location de Voiture révolutionne la manière dont vous accédez à un véhicule. Louez une voiture selon vos besoins, sans les tracas de la possession. Choisissez le modèle qui vous convient, que ce soit pour un court trajet ou une longue distance, et profitez de tarifs flexibles.</p>
                    <p class="card-text">Bénéficiez de la liberté de rouler quand vous le souhaitez, tout en optimisant vos coûts et en évitant les obligations à long terme.</p>
                    <a href="service#section-service" class="btn btn-primary">En savoir plus</a>
                </div>
                <img src="./img/services/img2.jpg" class="card-img-top" alt="...">
            </div>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Gestion de vos locations</h5>
                    <p class="card-text">Bénéficiez d'un tableau de bord intuitif pour ptimisez la gestion de vos locations avec une interface simple et efficace. Suivez vos réservations, ajustez vos options et gérez vos locations en temps réel, le tout depuis un seul endroit.</p>
                    <p class="card-text">Notre plateforme vous offre un contrôle total, que ce soit pour des voitures, des équipements ou des espaces, pour une expérience de location fluide et sans tracas.</p>
                    <a href="service#section-service" class="btn btn-primary">En savoir plus</a>
                </div>
                <img src="./img/services/img3.jpg" class="card-img-top" alt="...">
            </div>
        </div>
    </section>

    <section class="socials text-center" id="socials">
        <div class="row justify-content-center">
            <div class="col">
                <h2 class="title">Titre d'accroche</h2>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin interdum. Nunc ut mattis arcu.
                </p>
                <button class="btn">Formulaire</button>
            </div>
            <div class="col">
                <h3 class="social-title">Réseaux sociaux</h3>
                <div class="social-icons">
                    <img src="./img/footer/insta.png" width="50" height="50" alt="...">
                    <img src="./img/footer/x.png" width="50" height="50" alt="...">
                    <img src="./img/footer/youtube.png" width="50" height="50" alt="...">
                </div>
                <br>
                <h3 class="newsletter-title">Newsletter</h3>
                <div class="newsletter">
                    <input type="email" placeholder="user@mail.com">
                    <a href="#" class="btn btn-primary">S'abonner !</a>
                </div>
            </div>
        </div>
    </section>
</main>