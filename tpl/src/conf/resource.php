<?php
$mapping = array(
    'connector' => array(),
    'handler'   => array(),
    'strategy'  => array(),
);
$pool = array(
    'mysqli' => array(
        'options' => array(
            'deny_empty_update_delete' => TRUE,
            'warn_sql_length' => 51200,
            'fatal_sql_length' => 2097152,
        ),
        'demo' => array(
            'master' => array(
                array('host' => '127.0.0.1', 'port' => 3306),
            ),
            'slave' => array(
                array('host' => '127.0.0.1', 'port' => 3306),
            ),
            'options' => array(
                'timeout' => 1,
                'user'    => 'work',
                'passwd'  => 'work',
            ),
        ),
    ),
    'redis' => array(
        'demo' => array(
            'default' => array(
                array('host' => '127.0.0.1', 'port' => 6379)
            ),
        ),
    ),
    'curl' => array(
        'service' => array(
            'default' => array(
                array('host' => 'service.host.com') // 修改为service的host
            ),
        ),
    ),
);