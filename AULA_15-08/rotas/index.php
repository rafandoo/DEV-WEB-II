<?php
    if ($_GET) {
        $url = explode('/', $_GET['url']);
        $file = 'pages/' . $url[0] . '.php';
        if (file_exists($file)) {
            require_once $file;
        } else {
            require_once 'pages/404.php';
        }
    } else {
        require_once 'pages/home.php';
    }
?>