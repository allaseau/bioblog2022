<!DOCTYPE html>
<html lang="fr">
<?php $title="Articles"; require "../head.php"; ?>
<body>
    <?php require "../header.php"; ?>

    <div class="container mt-3">
        <div class="row">
            <?php foreach($articles_list as $article): ?>
                <div class="col-md-4 mb-4">
                    <article class="card">
                        <?php if(isset($article['image'])): ?>
                        <img class="card-img-top" src="<?= $article['image'] ?>" alt="Image of <?= $article['title'] ?>"/>
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= $article["title"] ?></h5>
                            <time class="card-subtitle"><?= date_format($article["creationDate"], "d/m/Y") ?></time>
                            <p class="card-text"><?= $article["content"] ?></p>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php require "../footer.php"; ?>
</body>
</html>