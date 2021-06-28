<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name' => 'Тестовое задание',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'dadata' => [
            'class' => '\gietos\yii\Dadata\Client',
            'token' => '2c00ed8af6b9f40dd6b2be05c9c75eebc1e351ab',
            'secret' => 'de085b4292ed062e1f7a137d436e67655ffb0ef9',
        ],
    ],
];
