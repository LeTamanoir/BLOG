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
    <div class="padding_small border radius"><?= $content; ?></div>
    <script src="/public/js/mainFunctions.js"></script>
</body>
</html>