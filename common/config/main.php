<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'timeZone' => 'Europe/Moscow',
        'formatter' => [  
            'class' => 'yii\i18n\Formatter',
            'defaultTimeZone' => 'Europe/Moscow',
            'timeZone' => 'GMT+3',
            'dateFormat' => 'php:d/m/Y H:i:s',
            'datetimeFormat' => 'php:d/m/Y H:i:s',
            'timeFormat' => 'H:i:s',
        ],
    ],  
];