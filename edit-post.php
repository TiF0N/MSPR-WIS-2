<?php
require_once 'includes/helpers.php';
require_once 'includes/layout/header.php';
require_once 'includes/components/navbar.php';

$posts = getPosts();
$user = getUser($_SESSION['id']);
?>
<main>

    <section class="container">
        <h1>Modification de post</h1>


        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal" >
            Modifier
        </button>


    </section>
</main>



<?php include_once 'includes/layout/footer.php' ?>