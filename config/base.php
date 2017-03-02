<?php
!defined('SYSTEM_NAME') && define('SYSTEM_NAME', 'ysf');
!defined('WWW_DIR') && define('WWW_DIR', realpath(__DIR__ . '/../../..'));
!defined('RUNTIME_DIR') && define('RUNTIME_DIR', WWW_DIR . '/runtime/' . SYSTEM_NAME);

$config = [
    'id' => SYSTEM_NAME,
    'basePath' =>dirname( __DIR__),
    'name' => SYSTEM_NAME,
    'runtimePath' => RUNTIME_DIR,
    'tcpEnable' => false,
    
    // 组件配置
    'components' => [
        'urlManager' => [
            'rules' => [
                "/service" => "/service/demo2/showJson",
                '/post/<id:\d+>' => 'post/view'
            ],
        ],
        'log' => [
            'targets' => [
                'notice' => [
                    'class' => 'ysf\log\FileTarget',
                    'logFile' => '@runtime/notice.log',
                    'levels' => ['trace', 'mysql', 'notice','mongo','redis', 'http'],
                ],
                'application' => [
                    'class' => 'ysf\log\FileTarget',
                    'logFile' => '@runtime/application.log',
                    'levels' => ['error','warning'],
                ],
            ],
            "logger" => [
                'class' => 'ysf\log\Logger',
            ],
        ],
    ],

    // 参数配置
    'params' => [
        
    ],
];

return $config;
