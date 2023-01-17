<?php foreach ($reponses as $reponse) : ?>
    <div class="position-relative m-4">
        <h3><?= $reponse["titre"]; ?></h3>
        <a class="btn btn-primary btn btn-info position-absolute  start-100 translate-middle btn btn-sm btn-secondary rounded-pill" href="info.php?id=<?= $reponse['id'] ?>">
            information
        </a>
        <h4><?= $reponse["typeRecette"] ?></h4>
        <p><?= $reponse["recette"] ?></p>
        <p><strong>publié le <?= $reponse["date"] ?> à <?= $reponse["heure"] ?></strong></p>
    </div>
<?php endforeach;?>