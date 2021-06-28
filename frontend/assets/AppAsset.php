<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];

    public $js = [
        "https://api-maps.yandex.ru/2.1/?apikey=f72b76f4-d464-4383-a474-e54d40f72ca0&lang=ru_RU",
        "js/ymap.js",
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
