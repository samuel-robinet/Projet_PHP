<header>
    <a href="index.php" id="accueil" class="col-3">
        <p id="logo">
            NOM DU PROJET
        </p>
    </a>
    <input type="text" id="recherche" name="recherche" class="col-5" placeholder="Rechercher">
    <nav id="navigation" class="col-4">
        <div id="panier" class="item">
            <p>Panier</p>
        </div>
        <div id="profil" class="item">
            <p>Profil</p>
            <div id="nav_profil">
                <?php if(isset($_SESSION['projet_user_connected'])):?>
                    <a href="index.php?controller=utilisateur&action=profil&id=<?=$_SESSION['projet_user_connected']->getAttr("idUtilisateur")?>">Profil</a>
                <?php else : ?>
                    <a href="index.php?controller=utilisateur&action=connexion">Connexion</a>
                <?php endif; ?>
                <p>Commandes</p>
                <?php if(isset($_SESSION['projet_user_connected'])):?>
                    <a href="index.php?action=deconnexion&controller=utilisateur">Déconnexion</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>