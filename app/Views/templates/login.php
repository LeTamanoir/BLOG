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

<body id=container__body class=flex_row>
    <div class="flex_column radius padding_small inside_border background_color_white">
    <div id=container_logo_login></div>
    <?= $content; ?>
    </div>
    <script src="/public/js/mainFunctions.js"></script>
</body>
</html>