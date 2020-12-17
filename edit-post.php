<?php
require_once 'includes/helpers.php';
require_once 'includes/layout/header.php';
require_once 'includes/components/navbar.php';

$posts = getUserPosts($_SESSION['id']);

$user = getUser($_SESSION['id']);
?>
    <main>

        <section class="container">
            <h1>Modification de post</h1>
            <h1>Modification de post</h1>
            <h1>Modification de post</h1>
            <h1>Modification de post</h1>
            <h1>Modification de post</h1>
            <h1>Modification de post</h1>
            <h1>Modification de post</h1>
            <h1>Modification de post</h1>
            <h1>Modification de post</h1>
            <h1>Modification de post</h1>
            <h1>Modification de post</h1>
            <h1>Modification de post</h1>




            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update-post">
                Test modal
            </button>

            <!-- Modal -->
            <div class="modal fade mt-5" id="update-post" tabindex="-1" aria-labelledby="update-post" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="update-post">Modifier mon post</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="p-5" action="includes/update-post.php?id=<?php echo $posts['id']; ?>" method="POST">
                            <input class="form-control" type="text" name="content" id="formFile"
                                   value="<?php echo $posts['content']; ?>" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save </button>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </main>



<?php include_once 'includes/layout/footer.php' ?>