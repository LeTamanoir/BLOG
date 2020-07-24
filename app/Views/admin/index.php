<p>Hey c'est l'admin</p>
<?php foreach(App::getInstance()->getTable('Post')->last() as $post): ?>
    <?= $post->extrait?>
<?php endforeach;?>
