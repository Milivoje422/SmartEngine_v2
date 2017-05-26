<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'SmartEngine',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],

    // Custom Models 
    'modules' => [
        'actionlog' => [
            'class' => 'cakebake\actionlog\Module',
        ],
        'blog' => [
            'class' => 'app\modules\blog\Module',
        ],
        'user' => [
            'class' => 'dektrium\user\Module',
            'admins' => ['Admin','Milivoje'],
            'enableAccountDelete' => true,
            'enableUnconfirmedLogin' => true,
        ],
    ],

    'components' => [
        'assetManager' => [
            // 'bundles' => [
            //     'yii\web\JqueryAsset' => [
            //         'js'=>[]
            //     ],
            //     'yii\bootstrap\BootstrapPluginAsset' => [
            //         'js'=>[]
            //     ],
            //     'yii\bootstrap\BootstrapAsset' => [
            //         'css' => [],
            //     ],
            // ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Smart_engine_cookie',  
        ],

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '4534',
            'baseUrl' => '',
        ],

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'dektrium\user\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => require(__DIR__ . '/db.php'),
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                // '<module:\w+>/<controller:\w+>/<action:\w+>'=>'<controller:\w+>/<action:\w+>',
            // '<modules>/<controller:\w+>/<action:\w+>' => '<controller>/<action>',
// '<controller:(foo|bar)>/<action>' => 'modules/<controller>/<action>',

                // '<module:\w+>/<action:\w+>/<id:(.*?)>' => '<module>/default/<action>/<id>',
                // '<module:\w+>/<action:\w+>' => '<module>/default/<action>',

                // '<controller:\w+>/<action:\w+>'=>'user/controller/action',
                // ['class' => 'yii\rest\UrlRule', 'controller' => 'post'],
            ],
        ],
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
