<?php include_once 'includes/head.php'; ?>

    <main id="inscription">
        <section class="container">
            <div class="card">
                <h1 class="text-center">S'inscrire</h1>
                <div class="mb-3">
                    <a href="login.php">Vous avez déjà un compte ?</a>
                </div>
                <form method="post" action="includes/store-user.php">
                    <div class="mb-3">
                        <label for="name" class="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="first_name">Prénom</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="dateofbirth">Date de naissance</label>
                        <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse mail</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        <div id="Email" class="form-text">Votre mail est protégé</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Accepter les conditions</label>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-warning">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>

    </main>


<?php include_once 'scripts.php'; ?>