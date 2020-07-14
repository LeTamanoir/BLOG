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
            <a href="#" class="center_block flex_row" id=navbar__header><p class="color_dark_blue show_mobile text_big center_block">BLOG Prototype |</p>
            <div id=favicon_mobile class="favicon_svg"></div></a>
            <button class="icons_navbar cursor margin_x_small" id="navbar__capteur" type="button"></button>
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
        <header id="header" class="text_center flex_row">
            <p class="text_big color_black show_desktop">BLOG Prototype | </p>
            <a href="#"><div id=favicon_desktop class="favicon_svg"></div></a>
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
            <svg xmlns="http://www.w3.org/2000/svg" class=navbar_background id=navbar_background_3><defs></defs><title>navbar_background_3</title><g id="Layer_1-2"><path class="st0" d="M0,1068.8c1159.6,35.3,1515.3-18.9,1612.4-79.3c76.3-47.5-43.5-75.9,0-187.3c58.1-148.7,298.9-167.7,269.3-274.4c-28.3-102.3-257-110.9-239.5-201.6C1662,224.1,1960,189.3,1915.5,119C1893,83.5,1783.4,39.3,1406.7,0H0V1068.8z"/></g></svg>
        </div>
        <div id="background_mobile">
            <svg xmlns="http://www.w3.org/2000/svg" class=navbar_background id=navbar_background_1_mobile><defs></defs><title>navbar_background_1_mobile</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Layer_1-2-2" data-name="Layer 1-2"><path d="M11.92,0C-25.67,260.89,32,340.93,96.4,362.8c50.6,17.17,80.86-9.8,199.46,0C454.15,375.87,474.43,430,588,423.4c108.94-6.33,118.1-57.8,214.73-53.86C911.38,374,948.35,441,1023.28,431c37.84-5.07,84.87-29.72,126.72-114.48V0Z"/></g></g></g></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class=navbar_background id=navbar_background_2_mobile><defs></defs><title>navbar_background_2_mobile</title><g id="Layer_1-2_1_"><g id="Layer_1-2-2_1_"><path class="st0" d="M1.9,363c9.3,202.5,50.3,281,94.5,308.8c50.6,31.8,80.9-18.1,199.5,0C454.1,696,474.4,796.3,588,784c108.9-11.7,118.1-107,214.7-99.7c108.7,8.3,145.6,132.3,220.6,113.8c37.8-9.4,84.9-55,126.7-212V0H44.6H0v353L1.9,363z"/></g></g></svg>
        </div>


    </div>
    <script src="/public/js/mainFunctions.js"></script>
</body>
</html>