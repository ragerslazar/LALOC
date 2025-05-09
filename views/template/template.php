<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home">
                        <img src="./img/nav_header/logo.png" alt="LALOC" id="logo_nav" width="60" height="50">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="louer">Louer</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="service">Service</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="contact">Contact</a>
                            </li>
                            <li class="nav-item">
                            <?php if (isset($_SESSION["user"])) {
                                echo "
                                <a class=\"nav-link active\" href=\"dashboard\">Mon Compte</a>
                                ";
                            } else {
                                echo "
                                <a class=\"nav-link active\" href=\"login\">Connexion</a>
                                ";
                            }
                            ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <?php echo $contenue?>

        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">

            <div class="col mb-3">
            </div>

            <div class="col mb-3">
                <h5>A propos de</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt cupiditate culpa, eos eius fuga dolor aspernatur explicabo voluptate, perferendis cumque eaque excepturi aut vel nostrum veniam! Voluptatum quod eligendi minus?</p>
            </div>

            <div class="col mb-3">
                <h5>Informations Légales</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, dolores odio iusto hic eveniet ipsam ipsa odit saepe. Quas qui alias dicta sunt! Magnam odit distinctio perspiciatis voluptatum repudiandae adipisci!</p>
            </div>

            <div class="col mb-3" id="footer-login">
                <?php
                if (isset($_SESSION["user"])) {
                    echo "<a href=\"logout\">Se déconnecter</a>";
                } else {
                    echo "<a href=\"login\">Connexion</a>";
                }
                ?>
            </div>

            <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <img src="./img/nav_header/logo.png" alt="LALOC" width="60" height="50">
                </a>
                <p class="text-body-secondary">© 2025</p>
            </div>

        </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
