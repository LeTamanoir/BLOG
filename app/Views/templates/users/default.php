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
            <title id=navbar__title class="color_dark_blue text_big center_block">BLOG Prototype</title>
            <input class="shapeshifter" id="navbar__capteur" type="button">
        </div>
        <div id="navbar__content">
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/dashboard.png" alt="dashboard"><a href=# class="text_medium center_block color_black underline_hover">dashboard</a>
            </div>
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/user.png" alt="user"><a href=# class="text_medium center_block color_black underline_hover">user</a>
            </div>
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/settings.png" alt="settings"><a href=# class="text_medium center_block color_black underline_hover">settings</a>
            </div>
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/logout.png" alt="logout"><a href="#" class="text_medium center_block color_black underline_hover">logout</a>
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
                <?php $content ?>
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