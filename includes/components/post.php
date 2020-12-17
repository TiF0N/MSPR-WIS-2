<?php $author = getUser($post['id']);
?>


<div class="card mb-4">
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


            <a href="#" class="btn btn-sm btn-outline-secondary">Modifier</a>
        </div>
    <?php endif; ?>
</div>