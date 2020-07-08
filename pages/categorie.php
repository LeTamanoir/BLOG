<?php
use App\Table\Categorie;
use App\Table\Article;
use App\App;

$categorie = Categorie::find($_GET['id']);
if($categorie === false){
    App::notFound();

}
$articles = Article::lastByCategory($_GET['id']);
$categories = Categorie::all();
?>
<h1><?= $categorie->title ?></h1>
<div class="">

        <div class="">
                <?php foreach($articles as $post): ?>


                        <h2><a href="<?= $post->url ?>"><?= $post->title?></a></h2>
                        <p><em><?= $post->categorie; ?></em></p>
                        <p><?= $post->extrait ?></p>

                <?php endforeach;?>
        </div>

        <div class="">
                <ul>
                        <?php foreach(\App\Table\Categorie::all() as $categorie): ?>
                                <li><a href="<?= $categorie->url ?>"><?= $categorie->title ?></a></li>
                        <?php endforeach;?>
                </ul>


        </div>
</div> 