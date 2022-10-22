
<div class="row my-4">
<h1>NOS PRODUCTEURS </h1>

<p>Découvrez ici les MEILLEURS produits agricoles  venant des différentes régions de Madagascar. </p>
    <aside class="col-md-3">
        
        <ul>
            <li>Types d'annonces</li>
            <li>Produits à la vente</li>
        </ul>
    </aside>

    <article class="col-md-9">
        <div class="row">
            <?php
            foreach ($articles as $article) : ?>
                <div class="col-sm-12 col-md-4 my-3">
                    <div class="card">
                        <img src="<?= $article['image']?>" class="card-img-top" alt="..." height="250px">
                        <div class="card-body">
                            <h5 class="card-title"><?= $article['title'] ?></h5>
                            <small>Ecrit le <?= $article['created_at'] ?></small>
                            <p class="card-text"><?= substr($article['introduction'], 0, 60) ?></p>
                            <a href="article.php?controller=article&task=show&id=<?= $article['id']  ?>" class="btn">En savoir plus <span id="icon-triangle"></span></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </article>
</div>