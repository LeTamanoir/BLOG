<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="/public/css/stylesheet.css" rel="stylesheet">
    <link rel="icon" href="/public/icons/favicon/favicon.ico">
    <link rel="manifest" href="/manifest.json">
    <title><?= App::getInstance()->title; ?></title>
</head>

<body id=container__body>

    <nav id="navbar">
        <div id="navbar__container">
        <div class="flex_row">
            <p class="color_dark_blue show_mobile text_big center_block">BLOG Prototype</p>
            <input class="shapeshifter cursor" id="navbar__capteur" type="button">
        </div>
        <div id="navbar__content">
            <div class="navbar__content__child padding_right">
                <div class="padding_horizontal_navbar"><input id=dashboard class="shapeshifter play"  type="button"></div><a href=# class="text_medium padding_x_small center_block color_black underline_hover">dashboard</a>
            </div>
            <div class="navbar__content__child padding_right">
                <div class="padding_horizontal_navbar"><input id=database class="shapeshifter play"  type="button"></div><a href=# class="text_medium padding_x_small center_block color_black underline_hover">database</a>
            </div>
            <div class="navbar__content__child padding_right">
                <div class="padding_horizontal_navbar"><input id=user_list class="shapeshifter play" type="button"></div><a href=# class="text_medium padding_x_small center_block color_black underline_hover">user list</a>
            </div>
            <div class="navbar__content__child padding_right">
                <div class="padding_horizontal_navbar"><input id=user class="shapeshifter play"  type="button"></div><a href=# class="text_medium padding_x_small center_block color_black underline_hover">user</a>
            </div>
            <div class="navbar__content__child padding_right">
                <div class="padding_horizontal_navbar"><input id=settings class="shapeshifter play"  type="button"></div><a href=# class="text_medium padding_x_small center_block color_black underline_hover">settings</a>
            </div>
            <div class="navbar__content__child padding_right">
                <div class="padding_horizontal_navbar"><input id=logout class="shapeshifter play"  type="button"></div><a href=# class="text_medium padding_x_small center_block color_black underline_hover">logout</a>
            </div>
        </div>
        </div>
    </nav>  
    <main id="main" class=background_color_white>
        <header id="header" class="text_center flex_row">
            <p class="text_big color_black show_desktop">BLOG Prototype | </p><a href="index.php" class="text_big color_black inline underline_hover">Accueil</a>
        </header>
        
        <div id="content" class="background_color_white">
            <div class="padding_small">
                <?= $content; ?>
            </div>
        </div>

    </main>
    <footer id="footer" class="flex_column background_color_light_grey">
        <div class=padding_x_small>
            <p class="text_small">this is footer</p>
        </div>
    </footer>
    <script src="/public/js/mainFunctions.js"></script>
</body>
</html>