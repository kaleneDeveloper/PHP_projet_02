<?php
$post = App\table\Article::getLast($_GET['id']);
?>

<h1><?= $post->title; ?></h1>

<p><?= $post->content; ?></p>