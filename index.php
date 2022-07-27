<!doctype html>
<?php
session_start();
include_once('./system/pages.php');
include_once('./system/function.php');
?>
<html lang="de">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="./assets/img/icon.png">
        <link rel="stylesheet" type="text/css" href="./assets/css/uikit.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/6mates.css">
        <title id="docTitle">Revcube.de</title>
    </head>

    <?php
        include($page['navbar']);
        include($page['body']);
    ?>


    <script src="./assets/js/system.js" type="text/javascript"></script>
    <script src="./assets/js/uikit.js" type="text/javascript"></script>
    <script src="./assets/js/uikit-icons.js" type="text/javascript"></script>
    <script src="./assets/js/jQuery.js" type="text/javascript"></script>
</html>