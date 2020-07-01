<!-- NavBar !-->
	
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: relative; z-index: 1; width: 100%;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="index.php?uc=accueil">Gestion Abonnement</a>
        <ul class="nav navbar-nav navbar-right mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?uc=Gestion">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?uc=ajouterAbo">Ajouter abonnement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?uc=supprimerAbo">Supprimer abonnement</a>
            </li>
        </ul>
        <button class="btn btn-outline-danger my-2 my-sm-0" onclick="window.location.href='index.php?uc=Connexion&action=login'" type="submit">Déconnexion</button>
    </div>
</nav>