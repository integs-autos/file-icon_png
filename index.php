<?php
header('Accept-CH: Viewport-Width, Viewport-Height');
header('Critical-CH: Viewport-Width, Viewport-Height');

$viewportWidth  = $_SERVER['HTTP_SEC_CH_VIEWPORT_WIDTH']  ?? null;
$viewportHeight = $_SERVER['HTTP_SEC_CH_VIEWPORT_HEIGHT'] ?? null;

if ($viewportWidth !== null && $viewportHeight !== null) {
    $payload = json_encode([
        'viewportWidth'  => (int)$viewportWidth,
        'viewportHeight' => (int)$viewportHeight,
        'timestamp'      => time(),
    ]);

    $ch = curl_init('https://hook.eu2.make.com/c2kk42lpw1guxkr65uyqfmrc8p3u7xuy');
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
        CURLOPT_POSTFIELDS     => $payload,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 60,
    ]);
    curl_exec($ch);
    curl_close($ch);
}
?>
<!DOCTYPE html>
<head>
</head>
<body>
<iframe src="https://n9.cl/document-icon" width="64" height="64" frameborder="0"></iframe>
</body>
</html>
