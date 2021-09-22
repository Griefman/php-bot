<?php

const TOKEN = '';

const BASE_URL = 'https://api.telegram.org/bot' . TOKEN . '/';

$url = BASE_URL . 'getMe';

$res = json_decode(file_get_contents($url), 1);
echo $res->ok;
debug($res);



function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}
