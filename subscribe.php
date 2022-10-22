<?php
require_once('libraries/auth.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

force_user_connect();

$pageTitle = "Abonné";
require_once('templates/header.html.php'); ?>
<div class="container">
    <div id="content">
        <div class="row my-4">
            <div class="col-md-6">
                <h1>Notre offre existant :</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <h5 class="card-header">Offre basic</h5>
                            <div class="card-body">
                                <h5 class="card-title text-orange">20 000 ar/moi</h5>
                                <p class="card-text">2 annonces </p>
                                <a href="uploadArticle.php" class="btn btn-custom">Sélectionner</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h5 class="card-header">Offre premium</h5>
                            <div class="card-body">
                                <h5 class="card-title text-orange">200 000 ar / an</h5>
                                <p class="card-text">3 annonces/moi</p>
                                <a href="uploadArticle.php" class="btn btn-custom">Sélectionner</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h5 class="card-header">Offre vip</h5>
                            <div class="card-body">
                                <h5 class="card-title text-orange">500 000ar</h5>
                                <p class="card-text">Annonces illimité</p>
                                <a href="uploadArticle.php" class="btn btn-custom">Sélectionner</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <h1>ESPACE PUBLICITAIRE</h1>
                <img src="images/fia.jpg" alt="" class="w-100">
            </div>
        </div>
    </div>
</div>
<?php require_once('templates/footer.html.php') ?>