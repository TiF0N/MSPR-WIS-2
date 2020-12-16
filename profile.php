<?php include_once 'includes/layout/header.php';
include_once 'includes/helpers.php';
$id = $_SESSION['id'];
$user = getUser($id);

?>
<?php include_once 'includes/components/navbar.php'; ?>


    <main id="main">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex justify-content-center align-items-center flex-column py-3">
                        <img class="rounded-circle" src="https://via.placeholder.com/100x100/" alt="">
                        <h1 class="h2 mt-4">Bonjour, <?php echo $user['nom'] . ' ' . $user['firstname']; ?></h1>
                        <a class="btn btn-warning mt-4" href="edit-user.php">Modifier mon profil</a>
                    </div>
                    <div class="col-lg-8 py-5">

                        <div class="card regular shadow">
                            <div class="card-header bg-dark">
                                <h2 class="text-warning">BIO</h2>
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
                <ul class="mt-4 p-2 rounded-2">
                    <li class="list-group-item list-group-item-action bg-dark text-white p-3 regular shadow d-flex flex-column">
                        <span>La publication</span>
                        <a href="#" class="btn btn-outline-warning mt-3">Voir la publication</a>
                    </li>
                    <li class="list-group-item list-group-item-action bg-dark text-white p-3 regular shadow d-flex flex-column">
                        <span>La publication</span>
                        <a href="#" class="btn btn-outline-warning mt-3">Voir la publication</a>
                    </li>

                </ul>
            </div>
        </section>

    </main>

<?php include_once 'includes/layout/footer.php'; ?>