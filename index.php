<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
    exit();
}

try {

    $dateTime = date('c');

    $formattedDateTime = str_replace('+00:00', 'Z', $dateTime);
    $response = [
        'email' => "chimwemwemasona@gmail.com",
        "current_datetime" => $formattedDateTime,
        "github_url" => "https://github.com/chimwemwemasona/hng_0"
    ];

    http_response_code(200);
    echo json_encode($response);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => "Internal server error"]);
}