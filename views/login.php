<main class="main-login">
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <?php 
            if ($status == "OK") {
                $_SESSION["user"] = $login;
                header("Location: dashboard");
            } elseif ($status == "login_failed") {
                echo "
                <div class=\"alert alert-danger text-center\" role=\"alert\">
                    <p>Adresse email ou mot de passe incorrect !</p>
                </div>
                ";

            }
            ?>
            <div class="formulaire-login" style="padding: 1.3rem">
                <div class="mb-3 text-center">
                    <h1>Connectez vous à votre compte</h1>
                </div>
                <form action="login" method="post">
                    <div class="mb-3">
                        <label for="email">Adresse électronique :</label>
                        <input type="email" class="form-control" name="loginEmail" id="loginEmail" placeholder="name@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="nom">Mot de passe :</label>
                        <input type="password" class="form-control" name="loginPwd" id="loginPwd" placeholder="Mot de passse" required>
                    </div>
                    
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Connexion</button>
                    </div>
                </form>
                <p style="margin-bottom: 0;">Pas encore de compte ? <a href="register">Inscrivez-vous !</a></p>
            </div>
        </div>
    </div>
</main>