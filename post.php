<?php $posts = getPosts(); ?>

<section class="py-5">
    <div class="container">

        <h1 class="pt-3 d-flex justify-content-center">Publications</h1>

        <div class="row">
            <div class="col-lg-6">

                <form method="post" action="./includes/store-post.php" class="my-5">
                    <div class="form-group mb-3">
                        <label class="h5" for="exampleFormControlTextarea1">Votre publication</label>
                        <textarea placeholder="Ecrire votre publication..." class="form-control"
                                  id="exampleFormControlTextarea1" rows="5"
                                  name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Publier</button>
                </form>

            </div>
            <div class="col-lg-6">

                <h3 class="text-center">Vos dernières publications</h3>
                <?php if ($posts = getPosts()): ?>
                    <ul class="mt-4 p-2 rounded-2">
                        <?php foreach ($posts as $post): ?>
                            <li class="list-group-item d-flex justify-content-between align-content-center align-items-center">
                                <span><?php echo $post['content']; ?></span>
                                <a class="btn btn-danger">Supprimer</a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

            </div>


        </div>

    </div>
</section>
