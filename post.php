<?php $posts = getPosts();
$id = $_SESSION['id'];
$posts_users = getUserPosts($id); ?>
<section class="py-5">
    <div class="container">

        <h1 class="pt-3 d-flex justify-content-center">Publications</h1>

        <div class="row">
            <div class="col-lg-4">

                <form method="post" action="./includes/store-post.php" class="my-5">
                    <div class="form-group mb-3">
                        <label class="h5" for="exampleFormControlTextarea1">Votre publication</label>
                        <textarea placeholder="Ecrire votre publication..." class="form-control"
                                  id="exampleFormControlTextarea1" rows="5"
                                  name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-warning">Publier</button>
                </form>

            </div>

            <div class="col-lg-4">

                <h3 class="text-center">Dernières publications</h3>
                <?php if ($posts = getPosts()): ?>
                    <ul class="mt-4 p-2 rounded-2">
                        <?php foreach ($posts as $post): ?>
                            <div class="card d-flex ">
                                <div class="card-header">
                                    Ecrit par  : <?php echo $post['id']; ?>
                                </div>
                                <div class="card-body justify-content-between align-content-center align-items-center">
                                    <p class="card-text"><?php echo $post['content']; ?></p>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

            </div>

            <div class="col-lg-4">

                <h3 class="text-center">Vos dernières publications :</h3>
                <?php if ($posts_users = getUserPosts($id)): ?>
                    <ul class="mt-4 p-2 rounded-2">
                        <?php foreach ($posts_users as $posts_user): ?>
                            <div class="card d-flex ">
                                <div class="card-header">
                                    Publié le : <?php echo $posts_user['created_at'] ?>
                                </div>
                                <div class="card-body justify-content-between align-content-center align-items-center">
                                    <p class="card-text"><?php echo $posts_user['content']; ?></p>
                                    <a class="btn btn-outline-warning" href="includes/delete-post.php?id=">Supprimer</a>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

            </div>


        </div>

    </div>
</section>
