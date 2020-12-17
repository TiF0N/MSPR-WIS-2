<?php include_once 'includes/helpers.php'; ?>

<?php
$user = getUser($_SESSION['id']);

?>

<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">SymphoLink</a>

            <div class="search-bar d-flex">
                <input class="form-control form-control-dark w-100" type="text" placeholder="Rechercher" aria-label="Search">
                <button class="btn btn-warning ms-2" type="button">Rechercher</button>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if (isset($user['profil_pic'])): ?>
                                <img class="rounded-circle m-1" style="height: 70px; width: auto"
                                     src="<?php echo $user['profil_pic']; ?>" alt="<?php echo $user['firstname'] ?>">
                            <?php endif; ?>
                            <?php echo $user['firstname'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="profile.php?id=<?php echo $_SESSION['id']?>">Profil</a></li>
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
</header>