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
            <div class="padding_small center_block" id=navbar__header__mobile>
            <a href="#"><!--p class="text_medium color_black text_center">Publier</p--><div id=publier_une_pause_mobile class="favicon_svg"></div></a>
            <a href="#"><!--p class="text_medium color_black text_center">Corriger</p--><div id=pause_public_mobile class="favicon_svg"></div></a>
            <a href="#"><!--p class="text_medium color_black text_center">Public</p--><div id=pause_private_mobile class="favicon_svg"></div></a>
            <a href="#"><!--p class="text_medium color_black text_center">Prive</p--><div id=correct_pause_mobile class="favicon_svg"></div></a>
            </div>
            <div id=navbar__capteur__container class=margin_x_small><button class="icons_navbar cursor" id="navbar__capteur" type="button"></button></div>
             
        </div>
        <div id="navbar__content">
            <a class="navbar__content__child padding_x_small cursor" href="#">
                <div id=dashboard class="icons_navbar margin_horizontal"></div><p class="text_medium text_navbar text_center padding_x_small center_block color_black underline_hover">dashboard</p>
            </a>
            <a class="navbar__content__child padding_x_small cursor" href="#">
                <div id=database class="icons_navbar margin_horizontal" ></div><p class="text_medium text_navbar text_center padding_x_small center_block color_black underline_hover">database</p>
            </a>
            <a class="navbar__content__child padding_x_small cursor" href="#">
                <div id=user_list class="icons_navbar margin_horizontal"></div><p class="text_medium text_navbar text_center padding_x_small center_block color_black underline_hover">user list</p>
            </a>
            <a class="navbar__content__child padding_x_small cursor" href="#">
                <div id=user class="icons_navbar margin_horizontal" ></div><p class="text_medium text_navbar text_center padding_x_small center_block color_black underline_hover">user</p>
            </a>
            <a class="navbar__content__child padding_x_small cursor" href="#">
                <div id=settings class="icons_navbar margin_horizontal" ></div><p class="text_medium text_navbar text_center padding_x_small center_block color_black underline_hover">settings</p>
            </a>
            <a class="navbar__content__child padding_x_small cursor" href="#">
                <div id=logout class="icons_navbar margin_horizontal" ></div><p class="text_medium text_navbar text_center padding_x_small center_block color_black underline_hover">logout</p>
            </a>
        </div>
        </div>
    </nav>
    <main id="main" class="">
        <header id="header" class="text_center flex_row margin_small">
            <div class="center_block flex_row" id=navbar__header__desktop>
                <a href="#" id=publier_une_pause_desktop class="favicon_svg"></a>
                <a href="#" id=pause_public_desktop class="favicon_svg"></a>
                <a href="#" id=pause_private_desktop class="favicon_svg"></a>
                <a href="#" id=correct_pause_desktop class="favicon_svg"></a>
                
            </div>
        </header>
        
        <div id="content" class="">
            <div class="padding_small">
                <?= $content; ?>
            </div>
        </div>

    </main>
    <footer id="footer" class="flex_column ">
        <div class=padding_x_small>
            <p class="text_small">this is footer</p>
        </div>
    </footer>
    <div id=container_background>
    </div>
    <script src="/public/js/mainFunctions.js"></script>
</body>
</html>