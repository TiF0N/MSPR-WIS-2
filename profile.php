<?php include_once 'includes/layout/header.php'; ?>
<?php include_once 'includes/components/navbar.php'; ?>
    <main id="main">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex justify-content-center align-items-center flex-column py-3">
                        <img class="rounded-circle" src="https://via.placeholder.com/100x100/" alt="">
                        <h1 class="h2 mt-4">Bonjour <?php echo $_SESSION['nom'] . ' '. $_SESSION['firstname'];?></h1>
                        <a class="btn btn-primary" href="edit-user.php">Modifier mon profil</a>
                    </div>
                    <div class="col-lg-8 py-5">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="h3">BIO</h2>
                                <p><?php $_SESSION['bio']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container py-4">
                <h2 class="h2">Ce que vous avez aimé</h2>
                <div class="card">
                    <div class="card-body">
                        <p>La publication...</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php include_once 'includes/layout/footer.php'; ?>