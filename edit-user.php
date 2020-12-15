<?php include_once 'includes/layout/header.php';
include_once 'includes/helpers.php';
?>

<?php
$user = getUserData($_GET['id']); ?>

    <section id="">
        <div class="container">

            <div class="d-flex justify-between py-5 align-items-center">
                <h1 class="py-5">Réglages du compte</h1>
                <a href="assets/delete-user.php?id=<?php echo $user['id']; ?>"
                   class="btn btn-outline-danger">Supprimer</a>
            </div>

            <form action="assets/update-user.php?id=<?php echo $user['id']; ?>" method="POST">

                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $user['nom']; ?>"
                           required>

                </div>

                <div class="form-group">
                    <label for=prenom>Prénom</label>
                    <input type="text" id="prenom" name="prenom" class="form-control"
                           value="<?php echo $user['prenom']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control"
                           value="<?php echo $user['email']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="text" id="password" name="password" class="form-control"
                           value="<?php echo $user['password']; ?>" required>
                </div>


                <button class="btn btn-warning " type="submit">
                    Mettre à jour
                </button>

            </form>

        </div>
    </section>


<?php include_once 'includes/layout/footer.php'; ?>