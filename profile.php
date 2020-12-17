<?php include_once 'includes/layout/header.php';
include_once 'includes/helpers.php';
$id = $_SESSION['id'];
$user = getUser($id);

?>
<?php include_once 'includes/components/navbar.php'; ?>


    <main id="main">

        <section class="section py-5 mx-auto ">

            <div class="d-flex justify-content-center flex-wrap  ">

                <div class="py-3  border border-danger">

                        <img class="rounded-circle " style="height: 150px; width: auto"
                             src="<?php echo $user['profil_pic']; ?>" alt="">

                        <h1 class="mt-4">Compte de : <?php echo $user['nom'] . ' ' . $user['firstname']; ?></h1>

                        <a class="btn btn-warning mt-4" href="edit-user.php">Modifier mon profil</a>
                </div>


                <div class="py-5 border border-primary">

                    <div class="card  regular shadow ">
                        <div class="card-header bg-dark">
                            <h2 class="text-warning">BIO</h2>
                        </div>

                        <div class="card-body">
                            <p class="card-text"><?php echo $user['bio']; ?></p>
                        </div>
                    </div>

                </div>

            </div>




            <div class="py-4  container mt-auto border border-info">

                <h2 class="h2 text-center">Publications likés :</h2>

                <ul class="mt-4 p-2 rounded-2">
                    <li class="list-group-item list-group-item-action bg-dark text-white p-3 regular shadow d-flex flex-column">
                        <span>La publication</span>
                        <a href="#" class="btn btn-outline-warning mt-3">Voir la publication</a>
                    </li>
                </ul>
            </div>


        </section>

    </main>

<?php include_once 'includes/layout/footer.php'; ?>