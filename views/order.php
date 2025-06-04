<main class="main-order">
    <div class="container text-center">
        <h1>Veuillez saisir vos informations</h1>
        <div class="forumaire-contact text-start">
            <?php
            if (isset($_SESSION["form_error"])) {
                $form_error = $_SESSION["form_error"];
                echo "
                <div class=\"alert alert-danger text-center\" role=\"alert\">
                    <p>$form_error</p>
                </div>
                ";
                unset($_SESSION["form_error"]);
            }
            ?>
            <form action="order?method=<?php echo $_GET["method"];?>&vehicule=<?php echo $_GET["vehicule"]?>" method="post">
                <?php
                if ($_GET["method"] == "cb") {
                    echo '
                     <div class="mb-3">
                        <label for="cb-number">Numéro de carte</label>
                        <input type="number" class="form-control" name="cb-number" id="cb-number" placeholder="1234 5678 9874 5632" required>
                    </div>

                    <div class="mb-3">
                        <label for="cb-exp">Date d\'éxpiration</label>
                        <input type="month" class="form-control" name="cb-exp" id="cb-exp" placeholder="10/29" required>
                    </div>
                    ';
                } else if ($_GET["method"] == "ch") {
                    echo '
                    <div class="mb-3">
                        <label for="cb-exp">Numéro de chèque</label>
                        <input type="number" class="form-control" name="ch-number" id="ch-number" placeholder="125874284565" required>
                    </div>';
                }
                ?>

                <button type="submit" name="submit-pay" class="btn btn-primary">Envoyer</button>
            </form>

            <?php
            if (isset($_SESSION["pay"])) {
                echo $_SESSION["pay"];
                unset($_SESSION["pay"]);
            }
            ?>

        </div>
    </div>
</main>