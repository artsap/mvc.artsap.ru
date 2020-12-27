<?php
return array(
    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',
    'products' => 'products/view',

    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);