<?php include_once 'includes/layout/header.php';
include_once 'includes/helpers.php';
$id = $_GET['id'];
$id_user = $_SESSION['id'];
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
                        <?php //if ($_SESSION['id'] === $user['user_id']) ?>
                        <a class="btn btn-outline-warning" href="edit-user.php">Modifier mon profil</a>
                    </div>
                </div>

                <div class="profile-bio">
                    <div class="py-5">
                        <div class="card">
                            <div class="card-header bg-dark text-center">
                                <h2 class="text-warning font-monospace">Profil</h2>
                            </div>

                            <div class="card-body">
                                <p class="card-text ">Bio : <?php echo $user['bio']; ?></p>

                                <p class="card-text ">Specialité : <?php echo $user['specialty']; ?></p>

                                <p class="card-text"> Date de naissance : <?php echo $user['dob']; ?></p>

                                <p class="card-text"> Habite à : <?php echo $user['ville']; ?></p>


                            </div>
                        </div>
                    </div>

                </div>


                <div class="profile-publication">
                    <div class="py-4">
                        <h2 class="h2 text-center">Dernières publications : </h2>
                        <ul class="mt-4 p-2 rounded-2">
                            <li>
                                <?php if ($posts = getUserPosts($id)): ?>

                                    <?php foreach ($posts as $post): ?>

                                        <?php require 'includes/components/post.php'; ?>

                                    <?php endforeach; ?>

                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php include_once 'includes/layout/footer.php'; ?>