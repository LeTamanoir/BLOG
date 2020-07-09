<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="/public/css/stylesheet.css" rel="stylesheet">
    <title>Home</title>
</head>

<body id=container__body>

    <nav id="navbar">
        <div class="flex_row border_bottom">
            <title id=navbar__title class="color_dark_blue text_big center_block">BLOG Prototype</title>
            <input id=navbar__capteur class="image_big" type="image" src="/public/icons/navbar/navbar.png">
        </div>
        <div id="navbar__content">
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/dashboard.png" alt="dashboard"><a href=# class="text_medium center_block color_black underline_hover">dashboard</a>
            </div>
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/database.png" alt="database"><a href=# class="text_medium center_block color_black underline_hover">database</a>
            </div>
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/user_list.png" alt="user list"><a href=# class="text_medium center_block color_black underline_hover">user list</a>
            </div>
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/user.png" alt="user"><a href=# class="text_medium center_block color_black underline_hover">user</a>
            </div>
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/settings.png" alt="settings"><a href=# class="text_medium center_block color_black underline_hover">settings</a>
            </div>
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/logout.png" alt="logout"><a href=# class="text_medium center_block color_black underline_hover">logout</a>
            </div>
        </div>
    </nav>  
    <main id="main">
        <header id="header" class="text_center">
            this is header
        </header>
        
        <div id="content" class="center_block">
            <?= $content; ?>
        </div>

        <footer id="footer" class="text_center">
            this is footer
        
        </footer>
    </main>
    <script src="/public/js/mainFunctions.js"></script>
</body>
</html>