<?php

require __DIR__.'/../vendor/autoload.php';

// 高德开放平台应用 API Key
$key = '***'; // todo 自己修改

$w = new \Lihq1403\Weather\Weather($key);

echo "获取实时天气：\n";

$response = $w->getWeather('深圳');
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

echo "\n\n获取天气预报：\n";

$response = $w->getWeather('深圳', 'all');
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

echo "\n\n获取实时天气(XML)：\n";

echo $w->getWeather('深圳', 'base', 'XML');
