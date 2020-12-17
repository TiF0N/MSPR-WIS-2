<?php include_once 'includes/layout/header.php'; ?>

<?php
$id = $_GET['id'];
$users = getUsers();

?>

    <div class="container">
        <h1 class="py-5">Liste des utilisateurs</h1>
        <?php if ($users = getUsers()): ?>
            <div class="list-group">
                <?php foreach ($users as $user): ?>
                    <a href="profile.php?id=<?php echo $user['id']; ?>" class="list-group-item list-group-item-action">
                        <?php echo $user['firstname'] . ' ' . $user['nom']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>


<?php include_once 'includes/layout/footer.php'; ?>