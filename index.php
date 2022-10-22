<?php
$pageTitle = 'Acceuil';
require_once('templates/header.html.php');
?>

<div class="hero">
    <h1><span>Un </span> <span>chemin </span> <span> de </span> <span> rencontre </span> <span> et
        </span> <span>de </span> <span> collaboration </span> <span>entre </span>
        <span>les </span> <span> producteurs</span> <span>agricoles </span> <span>Malagasy</span>
        <span>et</span> <span>les acheteurs</span>
    </h1>
</div>

    <div class="container my-5 home">
        <h1>BIENVENUE SUR FARARANO :</h1>

        <div class="row">


            <div id="carouselExampleInterval" class="carousel slide my-5 w-50" data-bs-ride="carousel">
                <div class="carousel-inner d-flex justify-content-center w-100">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="images/AGRI.jpg" class="d-block w-50" alt="..." class="d-flex justify-content-center">
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="images/AGRILTEU.jpg" class="d-block w-50 " alt="..." class="d-flex justify-content-center">
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="images/FOURCETTE.jpg" class="d-block w-50" alt="..." class="d-flex justify-content-center">
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="images/TELE.jpg" class="d-block w-50 d-flex " alt="..." class="d-flex justify-content-center">
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="images/TELE.jpg" class="d-block w-50 d-flex" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="row my-5">
            <h1>NOS MISSIONS</h1>
            <hr class="my-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/image_fararano.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <p class="px-4"><span class="text-orange">« Fararano »</span> désigne la saison des récoltes à Madagascar, la période où la plupart des agricultures sont FRUCTUEUSE. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-image">
                        <img src="images/madagascar.png" alt="">
                    </div>
                    <div class="card-text">
                        <p class="px-4">Nous travaillons en étroite collaboration avec des producteurs agricole de base dans tous les provinces Madagascar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/legumes.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <p class="px-4">
                            Nous pouvons fournir des produits de qualités avec des quantités suffisantes pour répondre aux besoins de toute une communauté.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once('templates/footer.html.php') ?>