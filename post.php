<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar.php' ;?>

<main>
    <section class="container">
        <div>
            <h1 class="pt-3 d-flex justify-content-center">Publication</h1>
        </div>
        <div>
            <form method="post" action="#" class="my-5">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Votre publication</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="post"></textarea>
                </div>

                <button type="submit" class="btn btn-warning mt-3"> Publier </button>
            </form>

        </div>
    </section>
</main>


<?php include_once 'includes/footer.php'; ?>
