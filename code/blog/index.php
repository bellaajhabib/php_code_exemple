<?php
$filename = __DIR__ . '/data/articles.json';
$articles = [];
$category = [];
$arrSelected = [];
$selectedCat = $_GET['cat'] ?? '';

if (file_exists($filename)) {
    $data = file_get_contents($filename);
    $articles = json_decode($data, true) ?? [];
    $categoryTmp = array_map(fn($a) => $a['category'], $articles);
    $contentcontent = array_map(fn($a) => $a['content'], $articles);
    $categoryUnique = array_column($articles, 'category');

    $category = array_reduce($categoryTmp, function ($acc, $cat) {

        if (isset($acc[$cat])) {
            $acc[$cat]++;
        } else {
            $acc[$cat] = 1;
        }
        return $acc;

    }, []);

    $categorycontent = array_reduce($contentcontent, function ($acc, $cat) {
        if (isset($acc[$cat])) {
            $acc[$cat]++;

        } else {
            $acc[$cat] = 1;
        }

        return $acc;
    }, []);

    $articlesCategories = array_reduce($articles, function ($acc, $article) {
        if (isset($acc[$article['category']])) {
            $acc[$article['category']] = [...$acc[$article['category']], $article];

        } else {
            $acc[$article['category']] = [$article];

        }
        return $acc;
    }, []);
}

if ($selectedCat) {
    $arrSelected[array_flip($category)[$selectedCat]] = [...$articlesCategories[array_flip($category)[$selectedCat]]];
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once 'includes/head.php' ?>
    <title>Blog</title>
</head>

<body>
<div class="container">
    <?php require_once 'includes/header.php' ?>
    <div class="content">
        <div class="newsfeed-container">
            <div class="category-container">
                <ul class="category-container">
                    <li class=<?= $selectedCat ? '' : 'cat-active' ?>>
                        <a href="/blog">Tous les articles <span class="small">(<?= count($articles) ?>)</span></a>
                    </li>
                    <?php foreach ($category as $cat => $num) : ?>
                        <li class=<?= $selectedCat == $num ? 'cat-active' : '' ?>>
                            <a href="/blog/?cat=<?= $num ?>"> <?= $cat ?> <?= '(' . $num . ')' ?>
                            </a>

                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="category-container">
            <?php if (!$selectedCat) : ?>
                <?php foreach ($category as $cat => $num) : ?>
                    <h2><?= $cat ?></h2>
                    <div class="articles-container" id="<?= $num ?>">
                        <?php foreach ($articlesCategories[$cat] as $a) : ?>
                            <div class="article block">
                                <div class="overflow">
                                    <div class="img-container" style="background-image:url(<?= $a['image'] ?>"></div>
                                </div>
                                <h3><?= $a['title'] ?></h3>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>

            <?php else : ?>
                <?php foreach ($arrSelected as $cat => $num) : ?>
                    <h2><?= $cat ?></h2>

                    <?php foreach ($arrSelected[$cat] as $a) : ?>
                     <a href="show-article.php?id=<?=$a['id'] ?>">
                        <div class="article block">
                            <div class="overflow">
                                <div class="img-container" style="background-image:url(<?= $a['image'] ?>"></div>
                            </div>
                            <h3><?= $a['title'] ?></h3>
                        </div>
                        </a>
                    <?php endforeach; ?>

                <?php endforeach; ?>
            <?php endif; ?>
            <?php ?>
        </div>

    </div>
    <?php require_once 'includes/footer.php' ?>
</div>

</body>

</html>