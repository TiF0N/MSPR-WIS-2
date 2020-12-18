<?php include_once 'includes/head.php'; ?>


    <main id="login">
        <section class="container">
                <div class="card">
                    <h1 class="h1 text-center">Connectez vous</h1>
                    <div class="row">
                        <div class="col-lg-5">
                            <form method="post" action="includes/authentification.php" class="my-5">
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <button type="submit" class="btn btn-outline-warning text-white"> Se connecter</button>
                            </form>
                            <div class="card-body">
                                <strong>Pas encore inscrit à SymphLink ?
                                </strong>
                                <strong>Rejoignez la plus grande communautée musicale du monde !</strong>
                                <a href="inscription.php" class="btn btn-warning my-3 text-white fw-bold" role="button"
                                   aria-pressed="true">
                                    S'inscrire
                                </a>
                            </div>


                        </div>
                        <div class="col">
                            <img src="inc/logo_simple.png" alt="">
                        </div>
                    </div>
                </div>

        </section>
    </main>


<?php include_once 'scripts.php'; ?>