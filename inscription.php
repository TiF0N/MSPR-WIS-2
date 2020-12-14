<?php include_once 'includes/header.php'; ?>
    <main id="main">
        <section class="container">
            <h1 class="pt-3 d-flex justify-content-center">S'inscrire</h1>
            <form class="my-5">
                <div class="mb-3">
                    <label for="name" class="name">Nom</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="first_name" class="first_name">Prénom</label>
                    <input type="text" class="form-control" id="first_name" required>
                </div>
                <div class="mb-3">
                    <label for="dateofbirth" class="dateofbirth">Date de naissance</label>
                    <input type="date" class="form-control" id="dateofbirth" required>
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Adresse mail</label>
                    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp">
                    <div id="Email" class="form-text">Nous ne partagerons pas votre mail avec qui que ce soit</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Confirmer son mot de passe</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-5">
                    <a href="login.php">Se connecter</a>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Accepter les conditions</label>
                </div>
                <button type="button" class="btn btn-primary">Envoyer</button>
            </form>
        </section>

    </main>


<?php include_once 'includes/footer.php'; ?>