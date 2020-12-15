<?php include_once 'includes/layout/header.php';
include_once 'includes/helpers.php';
?>


    <section id="">
        <div class="container">

            <div class="d-flex justify-between py-5 align-items-center">
                <h1 class="py-5">Réglages du compte</h1>
                <a href="assets/<? //php echo $user['id']; ?>"
                   class="btn btn-outline-danger">Supprimer mon compte</a>
            </div>

            <form action="includes/update-user.php?id=<?php echo $user['id']; ?>" method="POST">


                <div class="mb-3">
                    <label for="formFile" class="form-label">Photo de Profil</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="form-group">
                    <label for=firstname>firstname</label>
                    <input type="text" id="firstname" name="firstname" class="form-control"
                           value="<?php echo $user['firstname']; ?>" required>
                </div>

                <div class="form-group">
                    <label for=nom>nom</label>
                    <input type="text" id="nom" name="nom" class="form-control"
                           value="<?php echo $user['nom']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="dob">date de naissance</label>
                    <input type="text" id="dob" name="dob" class="form-control"
                           value="<?php echo $user['dob']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" id="type" name="type" class="form-control"
                           value="<?php echo $user['type']; ?>" required>
                </div>

                <div class="form-group">
                    <label for=firstname>ville</label>
                    <input type="text" id="ville" name="ville" class="form-control"
                           value="<?php echo $user['ville']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" id="mobile" name="mobile" class="form-control"
                           value="<?php echo $user['mobile']; ?>" required>
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