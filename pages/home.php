<div class="">

        <div class="">
                <?php foreach(\App\Table\Post::getLast() as $post): ?>

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
