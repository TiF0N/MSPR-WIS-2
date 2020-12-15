<?php include_once 'includes/layout/header.php'; ?>
<?php include_once 'includes/components/navbar.php'; ?>

<?php $posts = getPosts(); ?>

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
                            <label for="exampleFormControlTextarea1">Votre publication</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                      name="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning mt-3">Publier</button>

                    </form>
                </div>
                <div class="col">
                    <h3 class="mt-3">Vos dernières publications</h3>
                    <?php if ($posts = getPosts()): ?>
                        <div class=" card" style="max-width: 50rem;">
                            <?php foreach ($posts as $post): ?>
                                <span class="list-group-item list-group-item-action bg-light ">
                                    <?php echo $posts['content']; ?>
                                    <a" class="btn btn-outline-primary ml-5">Supprimer</a>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                </div>


            </div>
        </div>

    </section>
</main>


<?php include_once 'includes/layout/footer.php'; ?>
