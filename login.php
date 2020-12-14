<?php include_once 'includes/header.php'; ?>

    <main>
        <section class="container">
            <div>
                <h1 class="pt-3 d-flex justify-content-center">Connectez vous</h1>
            </div>

            <div class="row">
                <div class="col">
                    <form method="post" action="index.php" class="my-5">
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <button type="submit" class="btn btn-warning text-white"> Se connecter</button>
                    </form>
                </div>
                <div class="col">

                    <p class="mt-5 fw-bold">Pas encore inscrit à SymphLink ? <br>
                        Rejoignez la plus grande communautée musicale du monde
                    </p>

                    <a href="inscription.php" class="btn btn-warning mt-5 fw-bolder text-white" role="button" aria-pressed="true">
                        S'inscrire
                    </a>

                </div>
            </div>

        </section>
    </main>


<?php include_once 'includes/footer.php'; ?>