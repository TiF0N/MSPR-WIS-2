<?php
require_once 'includes/helpers.php';
require_once 'includes/layout/header.php';
require_once 'includes/components/navbar.php';



$user = getUser($_SESSION['id']);
?>

    <section id="">
        <div class="container">

            <div class="d-flex justify-between py-5 align-items-center">
                <h1 class="py-5">Réglages du compte</h1>

                <a href="includes/delete-user.php?id=<?php echo $user['id']; ?>"
                   class="btn btn-outline-danger m-lg-3">Supprimer mon compte</a>
            </div>

            <form action="includes/update-user.php?id=<?php echo $user['id']; ?>" method="POST">


                <div class="mb-3">
                    <label for="formFile" class="form-label">Photo de Profil</label>
                    <input class="form-control" type="text" name="profil_pic" id="formFile">
                </div>

                <div class="form-group">
                    <label for=firstname>Prénom</label>
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
                    <input type="date" id="dob" name="dob" class="form-control"
                           value="<?php echo $user['dob']; ?>" >
                </div>

                <div class="form-group">
                    <label for="specialty">Spécialité</label>
                    <input type="text" id="specialty" name="specialty" class="form-control"
                           value="<?php echo $user['specialty']; ?>" >
                </div>

                <div class="form-group">
                    <label for=ville>ville</label>
                    <input type="text" id="ville" name="ville" class="form-control"
                           value="<?php echo $user['ville']; ?>" >
                </div>

                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" id="mobile" name="mobile" class="form-control"
                           value="<?php echo $user['mobile']; ?>" >
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control"
                           value="<?php echo $user['email']; ?>" >
                </div>


                <div class="form-group">
                    <label for="bio">Bio</label>
                    <input type="text" id="bio" name="bio" class="form-control"
                           value="<?php echo $user['bio']; ?>" >
                </div>




                <button class="btn btn-warning mt-3 mb-3" type="submit">
                    Mettre à jour
                </button>

            </form>

        </div>
    </section>


<?php include_once 'includes/layout/footer.php'; ?>