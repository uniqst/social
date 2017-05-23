<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);
return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'homeUrl' => '/',
    'defaultRoute' => '/profile',
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'view' => [
            'class' => '\rmrevin\yii\minify\View',
            'enableMinify' => !YII_DEBUG,
            'concatCss' => true, // concatenate css
            'minifyCss' => true, // minificate css
            'concatJs' => true, // concatenate js
            'minifyJs' => true, // minificate js
            'minifyOutput' => true, // minificate result html page
            'webPath' => '@web', // path alias to web base
            'basePath' => '@webroot', // path alias to web base
            'minifyPath' => '@webroot/minify', // path alias to save minify result
            'jsPosition' => [ \yii\web\View::POS_END ], // positions of js files to be minified
            'forceCharset' => 'UTF-8', // charset forcibly assign, otherwise will use all of the files found charset
            'expandImports' => true, // whether to change @import on content
            'compressOptions' => ['extra' => true], // options for compress
            'excludeFiles' => [
                'jquery.js', // exclude this file from minification
                'app-[^.].js', // you may use regexp
            ],
            'excludeBundles' => [
                \dev\helloworld\AssetBundle::class, // exclude this bundle from minification
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                
            ],
        ],
        
    ],
    'params' => $params,
];