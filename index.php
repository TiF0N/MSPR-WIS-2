<?php include_once 'includes/layout/header.php';

if (empty($_SESSION['id'])) {
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: login.php');
    exit();
}
?>

<main id="main">

    <?php include_once 'includes/components/sidebar.php'; ?>

    <?php include_once 'post.php'; ?>

</main>

<?php include_once 'includes/layout/footer.php'; ?>

