<?php 
require_once('libraries/auth.php');
force_user_connect(); ?>

<div class="row">
    <div class="col-md-6">
        <h1><?= $article['title'] ?></h1>
        <hr>
        <small>Ecrit le <?= $article['created_at'] ?></small>
        <hr>
        <p><?= $article['introduction'] ?></p>

        <p><?= $article['content'] ?></p>

        <button type="button" class="btn btn-custom my-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Voir le contact du producteur
        </button>
        <div class="modal fade my-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Contact du producteur</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Nom : <?= $article['name'] ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <img src="<?= $article['image'] ?>" class="card-img-top my-4" alt="...">
    </div>
</div>



<!-- Button trigger modal -->