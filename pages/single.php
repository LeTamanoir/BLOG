<?php

use App\App;
use App\Table\Post;
use App\Table\Categorie;


$post = Post::find($_GET['id']);
if($post === false){
    App::notFound();
}
App::setTitle($post->title);
?>

<h1><?= $post->title; ?></h1>
<p><em><?= $post->categorie; ?></em></p>

<p><?= $post->content; ?></p>