<?php

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),    
    'bootstrap' => ['log'],
    'modules' => [
        'v1' => [
            'basePath' => '@app/modules/v1',
            'class' => 'api\modules\v1\Module'
        ]
    ],
    'components' => [        
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
//                [
//                    'class' => 'yii\rest\UrlRule',
//                    'controller' => 'v1/app',
//                    'extraPatterns' => [
//                    'GET search' => 'search',
//                    'GET <id>/videos' => 'video'
//                    ]
//                ],
//                [
//                    'class' => 'yii\rest\UrlRule',
//                    'controller' => 'v1/tag',
//                    'extraPatterns' => [
//                        'GET search' => 'search'
//                    ]
//
//                ],
//                [
//                    'class' => 'yii\rest\UrlRule',
//                    'controller' => 'v1/video',
//                    'extraPatterns' => [
//                        'GET search' => 'search'
//                    ]
//                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'v1/user',
                    'tokens' => [
                        '{id}' => '<id:\\w+>'
                    ]
//                    'except' => ['delete', 'create', 'update', 'index'],
//                    'extraPatterns' => [
//                        'POST login' => 'login',
//                        'POST logout' => 'logout',
//                        'POST forgot' => 'forgot',
//                    ],
                ]

            ],        
        ]
    ],
    'params' => $params,
];



