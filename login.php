<?php include_once 'includes/header.php';?>
<main>
    <section class="container">
        <div>
            <h1 class="pt-3 d-flex justify-content-center">Connecter vous</h1>
        </div>

        <form method="post" action="index.php" class="my-5">
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-warning"> Se connecter </button>
        </form>
    </section>
</main>


<?php include_once 'includes/footer.php'; ?>