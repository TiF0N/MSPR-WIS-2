<?php
include_once 'includes/helpers.php';

$user = getUser($_SESSION['id']);
?>
<header id="header">
    <section id="navbar d-flex justify-content-between">
        <div class="navbarwrapper">
            <nav class="navbar navbar-expand-lg w-100 navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">SymphoLink</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <input class="form-control form-control-dark w-100" type="text" placeholder="Rechercher"
                           aria-label="Search">
                    <button class="btn btn-warning ms-2" type="button">Rechercher</button>

                    <p class="text-white">
                    <div class="container mt-5">
                        <figure class="text-center">
                            <blockquote class="blockquote">
                                <h2 class="text-white"><?php echo 'Bienvenue ', $user['nom'] . " " . $user['firstname']; // Ici on est bien log, on affiche un message ?></h2>
                            </blockquote>
                        </figure>
                    </div>
                    </p>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="rounded-circle m-1" style="height: 70px; width: auto"
                                         src="<?php echo $user['profil_pic']; ?>" alt="">
                                    <?php echo $user['firstname'] ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="profile.php">Profil</a></li>
                                    <li><a class="dropdown-item" href="edit-user.php">Paramètres</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="logout.php">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </section>
</header>