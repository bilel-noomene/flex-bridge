<?php

$env = is_file('./.env.local.php') ? include './.env.local.php' : include './.env.php';
$url = 'https://flex.symfony.com' . $_SERVER['REQUEST_URI'];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_PROXY, $env['PROXY']);
curl_exec($ch);
curl_close($ch);
