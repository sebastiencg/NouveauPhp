<div class="position-relative m-4">
    <h3>commentaire</h3>
    <?php foreach ($reponses as $repons): ?>

    <p class="bg-success-subtle">
        <div class="nav-item dropdown bg-success-subtle">
            <?= $repons['commentaire'] ?>
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">plus</a>
            <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="dessert.php">modifier</a></li>
                <li><a class="dropdown-item" href="supprimer.php?id=<?= $repons['id'] ?>&amp;id_recette=<?= $repons['id_recette'] ?>">supprimer</a></li>
            </ul>
        </div>
    </p>


    <?php endforeach; ?>
</div>