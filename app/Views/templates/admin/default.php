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
            <button class="shapeshifter cursor margin_x_small" id="navbar__capteur" type="button"></button>
        </div>
        <div id="navbar__content">
            <a class="navbar__content__child padding_x_small cursor" href="#">
                <div id=dashboard class="shapeshifter play margin_horizontal"></div><p class="text_medium text_navbar text_center padding_x_small center_block color_black underline_hover">dashboard</p>
            </a>
            <a class="navbar__content__child padding_x_small cursor" href="#">
                <div id=database class="shapeshifter play margin_horizontal" ></div><p class="text_medium text_navbar text_center padding_x_small center_block color_black underline_hover">database</p>
            </a>
            <a class="navbar__content__child padding_x_small cursor" href="#">
                <div id=user_list class="shapeshifter play margin_horizontal"></div><p class="text_medium text_navbar text_center padding_x_small center_block color_black underline_hover">user list</p>
            </a>
            <a class="navbar__content__child padding_x_small cursor" href="#">
                <div id=user class="shapeshifter play margin_horizontal" ></div><p class="text_medium text_navbar text_center padding_x_small center_block color_black underline_hover">user</p>
            </a>
            <a class="navbar__content__child padding_x_small cursor" href="#">
                <div id=settings class="shapeshifter play margin_horizontal" ></div><p class="text_medium text_navbar text_center padding_x_small center_block color_black underline_hover">settings</p>
            </a>
            <a class="navbar__content__child padding_x_small cursor" href="#">
                <div id=logout class="shapeshifter play margin_horizontal" ></div><p class="text_medium text_navbar text_center padding_x_small center_block color_black underline_hover">logout</p>
            </a>
        </div>
        </div>
    </nav>
    <main id="main" class="">
        <header id="header" class="text_center flex_row">
            <p class="text_big color_black show_desktop">BLOG Prototype | </p><a href="index.php" class="text_big color_black inline underline_hover">Accueil</a>
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
        <div id=background_desktop>
            <svg xmlns="http://www.w3.org/2000/svg" class=navbar_background id=navbar_background_1><defs></defs><title>navbar_background_1</title><g id="Layer_2_navbar" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M197.56,0c4.21,9,31.44,69.38-1.3,125.28-22.8,38.91-62.26,54.48-84.48,63.25C63.83,207.44,20.46,204.54,0,201.91V0Z"/></g></g></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class=navbar_background id=navbar_background_2><defs></defs><title>navbar_background_2</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M0,1018c361.65,33.61,472.56-18,502.86-75.57,23.8-45.21-13.58-72.33,0-178.42,18.12-141.59,93.2-159.72,84-261.33-8.82-97.44-80.14-105.63-74.68-192.06,6.14-97.22,99.08-130.29,85.18-197.31C590.34,79.5,556.17,37.44,438.69,0H0Z"/></g></g></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class=navbar_background id=navbar_background_3><defs></defs><title>navbar_background_3</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M1409,0c23.26,79.82,61.69,254.68,0,456C1306.43,790.72,997.77,935,902,980c-164.36,77.31-314.61,95.61-406,100H0V0Z"/></g></g></svg>
        </div>
        <div id="background_mobile">
            <svg xmlns="http://www.w3.org/2000/svg" class=navbar_background id=navbar_background_1_mobile><defs></defs><title>navbar_background_1_mobile</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Layer_1-2-2" data-name="Layer 1-2"><path d="M11.92,0C-25.67,260.89,32,340.93,96.4,362.8c50.6,17.17,80.86-9.8,199.46,0C454.15,375.87,474.43,430,588,423.4c108.94-6.33,118.1-57.8,214.73-53.86C911.38,374,948.35,441,1023.28,431c37.84-5.07,84.87-29.72,126.72-114.48V0Z"/></g></g></g></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class=navbar_background id=navbar_background_2_mobile><defs></defs><title>navbar_background_2_mobile</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Layer_1-2-2" data-name="Layer 1-2"><path d="M1150,781.5c-85,12.9-271.19,34.22-485.55,0-356.42-56.89-510-228.09-558-281.21C24.15,409.13,4.67,325.8,0,275.11V0H1150Z"/></g></g></g></svg>
        </div>


    </div>
    <script src="/public/js/mainFunctions.js"></script>
</body>
</html>