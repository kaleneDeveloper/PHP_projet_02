<?php
$category = App\table\Category::find($_GET['id']);
$articles = App\table\Article::lastByCategory($_GET['id']);

?>
<?php foreach ($articles as $i => $article) : ?>
    <h1><?= $article->title; ?></h1>
    <p><?= $article->content; ?></p>
<?php endforeach ?>
