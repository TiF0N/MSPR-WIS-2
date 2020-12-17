<?php include_once 'includes/layout/header.php'; ?>

<?php
$id = $_GET['id'];
$users = getUsers();

?>
    <main id="main">
        <section class="container">
            <div class="users-list">
                <div class="title-list">
                    <h1 class="h1 py-3">Liste des utilisateurs</h1>
                    <a href="profile.php" class="btn btn-warning m-lg-3">Voir mon profil</a>
                </div>
                <?php if ($users = getUsers()): ?>
                    <div class="list-group">
                        <ul class="users">
                            <?php foreach ($users

                            as $user): ?>
                            <li class="list-group-item list-group-item-action">
                                <a class="text-decoration-none" href="profile.php?id=<?php echo $user['id']; ?>">
                                    <?php echo $user['firstname'] . ' ' . $user['nom']; ?>
                                </a>
                                <?php endforeach; ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </main>


<?php include_once 'includes/layout/footer.php'; ?>