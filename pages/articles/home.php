<div class="">

        <div class="">
                <?php foreach(App::getInstance()->getTable('Post')->last() as $post): ?>
                        <p class="text_big"><a href="<?= $post->url ?>"><?= $post->title?></a></p>
                        <p class="text_small"><em><?= $post->categorie; ?></em></p>
                        <p class="text_medium"><?= $post->extrait ?></p>

                <?php endforeach;?>
        </div>

        <div class="">
                <ul>
                        <?php foreach(App::getInstance()->getTable('Category')->all() as $categorie): ?>
                                <li class="text_small"><a href="<?= $categorie->url ?>"><?= $categorie->title ?></a></li>
                        <?php endforeach;?>
                </ul>


        </div>
</div> 
