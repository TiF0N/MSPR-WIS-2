<?php include_once 'includes/layout/header.php'; ?>
<?php include_once 'includes/components/navbar.php'; ?>

<?php $posts = getPosts();

?>

<main>
    <section class="container">

        <div class="container">

            <div>
                <h1 class="pt-3 d-flex justify-content-center">Publications</h1>
            </div>

            <div class="row">
                <div class="col">
                    <form method="post" action="./includes/store-post.php" class="my-5">
                        <div class="form-group">
                            <label class="h5" for="exampleFormControlTextarea1">Votre publication</label>
                            <textarea placeholder="Ecrire votre publication..." class="form-control"
                                      id="exampleFormControlTextarea1" rows="5"
                                      name="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning mt-3">Publier</button>

                    </form>
                </div>
                <div class="col">
                    <h3 class="d-flex justify-content-center">Vos dernières publications</h3>
                    <?php if ($posts = getPosts()): ?>
                            <ul class="mt-4 p-2 rounded-2">
                                <?php foreach ($posts as $post): ?>
                                    <li class="list-group-item list-group-item-action bg-dark text-white p-3 regular shadow">
                                        <?php echo $posts['content']; ?>
                                        <a class="btn btn-danger ms-5">Supprimer</a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                    <?php endif; ?>

                </div>


            </div>
        </div>

    </section>
</main>


<?php include_once 'includes/layout/footer.php'; ?>
