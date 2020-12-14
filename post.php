<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar.php'; ?>

<main>
    <section class="container">

        <div class="container">

            <div>
                <h1 class="pt-3 d-flex justify-content-center">Publication</h1>
            </div>

            <div class="row">
                <div class="col">
                    <form method="post" action="#" class="my-5">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Votre publication</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                                      name="post"></textarea>
                        </div>

                        <button type="submit" class="btn btn-warning mt-3"> Publier</button>
                    </form>
                </div>
                <div class="col">
                    <h3 class="mt-3">Vos dernières publications</h3>
                    <div class="card mt-4" style="width: 40rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>

    </section>
</main>


<?php include_once 'includes/footer.php'; ?>
