<div class="padding_left">

        <div class="">
                <?php foreach(App::getInstance()->getTable('Post')->last() as $post): ?>
                        <p class="text_big"><a href="<?= $post->url ?>"><?= $post->title?></a></p>
                        <p class="text_small"><em><?= $post->categorie; ?></em></p>
                        <p class="text_medium"><?= $post->extrait ?></p>
                        <p class="margin_bottom" content=""></p>
                <?php endforeach;?>
        </div>

        <div class="margin_bottom">
                <ul>
                        <?php foreach(App::getInstance()->getTable('Category')->all() as $categorie): ?>
                                <li><a class="underline_hover text_small margin_top" href="<?= $categorie->url ?>"><?= $categorie->title ?></a></li>
                        <?php endforeach;?>
                </ul>


        </div>
</div> 
