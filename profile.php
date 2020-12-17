<?php include_once 'includes/layout/header.php';
include_once 'includes/helpers.php';
$id = $_SESSION['id'];
$user = getUser($id);

?>
<?php include_once 'includes/components/navbar.php'; ?>


    <main id="main">

        <section class="dashboard mx-auto">

            <div class="profile bg-light shadow">
                <div class="py-3">
                    <div class="avatar">
                        <img class="rounded-circle" src="<?php echo $user['profil_pic']; ?>" alt="">
                    </div>
                    <div class="profile-name">
                        <h1 class="h1">Compte de : <?php echo $user['nom'] . ' ' . $user['firstname']; ?></h1>

                        <a class="btn btn-outline-warning" href="edit-user.php">Modifier mon profil</a>
                    </div>
                </div>

                <div class="profile-bio">
                    <div class="py-5">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h2 class="text-warning">BIO</h2>
                            </div>

                            <div class="card-body">
                                <p class="card-text"><?php echo $user['bio']; ?></p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="profile-publication">
                    <div class="py-4">
                        <h2 class="h2 text-center">Publications likés :</h2>
                        <ul>
                            <li>
                                <span>La publication</span>
                                <a href="#" class="btn btn-outline-warning mt-3">Voir la publication</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php include_once 'includes/layout/footer.php'; ?>