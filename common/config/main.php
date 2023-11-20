<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => [ [
            'class' => 'yii\web\GroupUrlRule',
            'prefix' => 'da',
            'routePrefix' => 'da',
            'rules' => [
                '' => 'default/index',
                '<_m:[\w\-]+>' => '<_m>/default/index',
                '<_m:[\w\-]+>/<id:\d+>' => '<_m>/default/view',
                '<_m:[\w\-]+>/<id:\d+>/<_a:[\w-]+>' => '<_m>/default/<_a>',
                '<_m:[\w\-]+>/<_c:[\w\-]+>/<id:\d+>' => '<_m>/<_c>/view',
                '<_m:[\w\-]+>/<_c:[\w\-]+>/<id:\d+>/<_a:[\w\-]+>' => '<_m>/<_c>/<_a>',
                '<_m:[\w\-]+>/<_c:[\w\-]+>' => '<_m>/<_c>/index',
            ],
        ],
        ],
    ],
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
];
