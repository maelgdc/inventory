<div class="container">
    <div class="card" style="width: 18rem;">
        <form action="./index.php?page=accueil" method="POST" class="card-body d-flex flex-column align-items-center gap-3" id="formulaire_connexion">
            <h5 class="card-title">Connexion</h5>
            <div class="form-floating">
                <input type="text" class="form-control" id="login_connexion" placeholder="" required name="login">
                <label for="login_connexion">login</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password_connexion" placeholder="" required name="password">
                <label for="password_connexion">Mot de passe</label>
            </div>
            <?php
            if (isset($erreur)) { ?>
                <span class="alert alert-danger py-2 px-3 text-center rounded-2" role="alert"><?= htmlspecialchars($erreur) ?></span>
            <?php }
            ?>
            <button type="submit" href="./index.php?page=accueil" class="btn btn-primary">Valider</button>
            <button type="button" class="btn btn-link" id="bouton_inscription">S'inscrire</button>
        </form>
        <form action="./index.php?page=accueil" method="POST" class="card-body d-flex flex-column align-items-center gap-3 d-none" id="formulaire_inscription">
            <h5 class="card-title">Inscription</h5>
            <div class="form-floating">
                <input type="text" class="form-control" id="login_inscription" placeholder="" required name="login">
                <label for="login_inscription">login</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password_inscription" placeholder="" required name="password">
                <label for="password_inscription">Mot de passe</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password_conf_inscription" placeholder="" required name="password_conf">
                <label for="password_conf_inscription">Confirmation mot de passe</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="nom_inscription" placeholder="" required name="nom">
                <label for="nom_inscription">Nom</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="prenom_inscription" placeholder="" required name="prenom">
                <label for="prenom_inscription">Prénom</label>
            </div>
            <?php
            if (isset($erreur)) { ?>
                <span class="alert alert-danger py-2 px-3  text-center rounded-2" role="alert"><?= htmlspecialchars($erreur) ?></span>
            <?php }
            ?>
            <div class="d-flex gap-3">
                <button type="submit" href="./index.php?page=accueil" class="btn btn-primary">Valider</button>
                <button type="button" class="btn btn-primary" id="bouton_connexion">Retour</button>
            </div>
        </form>
    </div>
</div>