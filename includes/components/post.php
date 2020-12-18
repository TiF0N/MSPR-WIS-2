<?php $author = getUser($post['user_id']);

$posts = getPosts();
$modif = getUserPosts($_SESSION['id']);

?>

<div class="card mb-4 slide-up">
    <div class="card-header">
        <?php if (isset($author) && isset($author['nom'])): ?>
            <span>Ecrit par : <?php echo $author['firstname']; ?></span>
        <?php endif; ?>
        <span>Publié le  <?php echo date('jS F', strtotime($post['created_at'])); ?></span>
    </div>

    <div class="card-body justify-content-between align-content-center align-items-center">
        <?php if (isset($post['content'])): ?>
            <p class="card-text"><?php echo $post['content']; ?></p>
        <?php endif; ?>
    </div>

    <?php if ($_SESSION['id'] === $post['user_id']): ?>

        <div class="card-footer d-flex gap-2">

            <form action="includes/delete-post.php?id=<?php echo $post['id']; ?>" method="POST">
                <button type="submit" class="btn btn-sm btn-outline-warning">
                    Supprimer
                </button>

            </form>
            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                    data-bs-target="#update-post-<?php echo $post['id']; ?>">
                Modifier
            </button>



            <?php foreach ($modif as $post): ?>

                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade mt-5" id="update-post-<?php echo $post['id']; ?>" tabindex="-1"
                     aria-labelledby="update-post-<?php echo $post['id']; ?>" aria-hidden="true"
                     style="z-index: 9999">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h5 class="modal-title" id="update-post">Modifier mon post</h5>


                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <form class="p-5" action="includes/update-post.php?id=<?php echo $post['id']; ?>"
                                      method="POST">
                                    <label for="formFile">Contenu</label>
                                    <input class="form-control" type="text" name="content" id="formFile"
                                           value="<?php echo $post['content']; ?>" required>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    <?php endif; ?>

</div>


