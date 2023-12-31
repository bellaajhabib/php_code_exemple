<?php

$filename = __DIR__.'/data/articles.json';
$article =[];
$id= $_GET['id']?? '';

if(!$id){
  haeder('Location:/blog/');
} elseif(file_exists($filename)){
    $articles = json_decode(file_get_contents($filename));
    $articleIndex = array_search($id, array_column( $articles,'id'));

    $article = $articleIndex ? $articles[$articleIndex] :[];

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once 'includes/head.php' ?>

    <link rel="stylesheet" href="public/css/show-article.css">
    <title>Article</title>
</head>

<body>
    <div class="container">
        <?php require_once 'includes/header.php' ?>
        <div class="content">
        <div class="article-container">
          <a class="article-back" href="/blog">Retour à la liste des articles</a>
          <div class="article-cover-img" style="background-image:url(<?=$article->image ?>)"></div>
          <h1 class="article-title"><?= $article->title ?></h1>
          <div class="separator"></div>
          <p class="article-content"><?= $article->content?></p>
        </div>
            <div class="action">
                 <a class="btn btn-secondary" href="/blog/delete-article.php?id=<?=$article->id ?>">Delete article</a>
                <a class="btn btn-primary" href="/blog/edit-article.php?id=<?=$article->id ?>">Edit article</a>
            </div>
      </div>
        <?php require_once 'includes/footer.php' ?>
    </div>

</body>
</html>