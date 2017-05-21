<?php
return [
    'language' => 'ru-RU',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

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
    ],
];
