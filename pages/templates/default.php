<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="/public/css/stylesheet.css" rel="stylesheet">
    <title>Home</title>
</head>

<body id=container__body>

    <nav id="navbar">
        <input id=navbar__capteur class="image_big" type="image" src="/public/icons/navbar/100px/navbar.png">

        <div id="navbar__content">
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/100px/dashboard.png" alt="dashboard"><a href=# class="text_medium center color_black underline_hover">dashboard</a>
            </div>
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/100px/database.png" alt="database"><a href=# class="text_medium center color_black underline_hover">database</a>
            </div>
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/100px/user_list.png" alt="user list"><a href=# class="text_medium center color_black underline_hover">user list</a>
            </div>
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/100px/user.png" alt="user"><a href=# class="text_medium center color_black underline_hover">user</a>
            </div>
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/100px/settings.png" alt="settings"><a href=# class="text_medium center color_black underline_hover">settings</a>
            </div>
            <div class="navbar__content__child margin_top padding_small">
                <img class="image_medium padding_right" src="/public/icons/navbar/100px/logout.png" alt="logout"><a href=# class="text_medium center color_black underline_hover">logout</a>
            </div>
        </div>
    </nav>  
    <main id="main">
        <header id="header">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat adipisci architecto, repudiandae explicabo accusantium sint omnis atque consequatur, libero iure incidunt possimus minus deleniti? Deserunt facilis incidunt unde eius velit?
        </header>
        
        <div id="content">
            <?= $content; ?>
        </div>

        <footer id="footer">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat adipisci architecto, repudiandae explicabo accusantium sint omnis atque consequatur, libero iure incidunt possimus minus deleniti? Deserunt facilis incidunt unde eius velit?
        
        </footer>
    </main>
    <script src="/public/js/mainFunctions.js"></script>
</body>
</html>