<?php require_once "../helpers/form-helper.php"; ?>

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
        <div>
            <?php if($page > 1): ?>
            <a href="<?= getSelfUrl()?> ?page=<?= $page-1?>" class="float-left">Précédent</a>
            <?php endif; ?>
            <?php if(count($articles_list) === ROW_PER_PAGE):?>
            <a href="<?= getSelfUrl()?> ?page=<?= $page+1?>" class="float-right">Suivant</a>
            <?php endif; ?>
        </div>
    </div>

    <?php require "../footer.php"; ?>
</body>
</html>