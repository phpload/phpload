<?php

$params = require dirname(__DIR__,2) . '/common/config/params.php';
$dbFile = dirname(__DIR__,2) . '/common/database/phpLoad.db';

return [
    'id' => 'phpLoad',
    'basePath' => dirname(dirname(__DIR__)),
    'language' => 'de-DE', 
    'bootstrap' => ['log'],
    'controllerNamespace' => 'phpload\\controllers',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\ArrayCache'
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'sqlite:' . $dbFile,
            'charset' => 'utf8'
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error'],
                    'logFile' => '@log/error.log',
                    'logVars' => array(),
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['warning'],
                    'logFile' => '@log/warning.log',
                    'logVars' => array(),
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['trace'],
                    'logFile' => '@log/trace.log',
                    'logVars' => array(),
                ],
            ],
        ],
    ],
    'params' => $params
];