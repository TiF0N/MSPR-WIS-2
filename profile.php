<?php include_once 'includes/layout/header.php'; ?>
<?php include_once 'includes/components/navbar.php'; ?>

<?php $user = getUser($_SESSION['id']); ?>
    <main id="main">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex justify-content-center align-items-center flex-column py-3">
                        <img class="rounded-circle" src="https://via.placeholder.com/100x100/" alt="">
                        <h1 class="h2 mt-4">Profil de : <?php echo $user['nom'] . ' ' . $user['firstname']; ?></h1>
                        <a class="btn btn-warning" href="edit-user.php">Modifier mon profil</a>
                    </div>
                    <div class="col-lg-8 py-5">

                        <div class="card">
                            <div class="card-header">
                                <h2 class="text-warning ">BIO</h2>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $user['bio']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container py-4">
                <h2 class="h2">Publications likés :</h2>
                <div class="card">
                    <div class="card-body">
                        <p>La publication...</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php include_once 'includes/layout/footer.php'; ?>