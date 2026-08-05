<?php
function getBaseUrl() {
    $scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $scriptPath = dirname($_SERVER['REQUEST_URI']);
    $scriptPath = rtrim($scriptPath, '/') . '/';

    return $scheme . '://' . $host . $scriptPath;
}

$baseurl = getBaseUrl();
$clientsbpurl = $baseurl . 'api.php';
$basesbpurl = $baseurl . 'api.php';
$securityurl = $baseurl . 'dns.php';

$clientsbpurl = str_replace('api/api.php', '', $clientsbpurl);
$basesbpurl = str_replace('api/api.php', '', $basesbpurl);

$response = [
    "data" => [
        "getSmartersProAll" => [
            "__typename" => "SmartersProAll",
            "id" => "6f89a48b-f4b7-4ff9-8400-9feb1792bf7e",
            "basesbpurl" => $basesbpurl,
            "securityurl" => $securityurl,
            "clientsbpurl" => $clientsbpurl,
            "config1" => "https://smartersapi-android.servep2p.com/?/Android",
            "config2" => "",
            "config3" => "",
            "config4" => "",
            "config5" => "",
            "createdAt" => "2023-12-06T12:23:55.846Z",
            "updatedAt" => "2023-12-06T12:23:55.846Z"
        ]
    ]
];

header('Content-Type: application/json');
echo json_encode($response);
?>
