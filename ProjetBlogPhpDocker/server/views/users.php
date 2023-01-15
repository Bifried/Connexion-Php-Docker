<?php


$objDb = new \App\Manager\UserManager(new \App\Factory\PDOFactory());
$conn = $objDb->getAllUsers();
echo json_encode($conn,true);

function createJWT($payload, $secretKey) {
    // Encode the header as a JSON string
    $header = json_encode(['alg' => 'HS256', 'typ' => 'JWT']);

    // Encode the payload as a JSON string
    $payload = json_encode($payload);

    // Base64Url Encode the header
    $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

    // Base64Url Encode the payload
    $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

    // Create signature hash
    $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $secretKey, true);

    // Base64Url Encode the signature hash
    $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

    // Concatenate the encoded header, payload, and signature together, separated by dots
    $jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

    return $jwt;
}

$array = [
    "salut" => "oui"
];

$test = createJWT($array,"AAAAB3NzaC1yc2EAAAADAQABAAABgQDYcppz0OydMtW0Xnvaq2J07fN59kpHXCAVlGNrDa4Nh6xAWw+G7VjECaSwXhsyttJ4pLPwJlgYEcUIxwu8aZENeJAnLDJjwDy+kh8EJJkefX6twJFxX3oQ6wirwFREufkLWCNI/SfHtRhaxWCDdKTPaIOFq1jUg5D0ckZGws4nCFZaT+txAAVL+T0AOtEGFQBxdoWIsgi66/DSb8WC5tfqoCRCrUrBC2/cT2MvGZwE9rJeTYWqiMYMbM7XyLz9GSDVQUks5EnTxxlgYfSCOnN6GRoG4+hG+TQ7ncJQ1UnIowsi/P2PuCrRDDc7AzC6tAHAFAEoyh3XQaz8wtnSk5P5bzSUdhkoG24lW8OJJpFT4FMpyVmfoqtyMsfpSdBFwMpMo/iaYay+N7FO65h8EQkW0yKfISVuUUkTWG4kF0MJDt5WIREPbEFy+OrgqsnlgrjNc7lZ5Z6MQLsH8fLHhI8SleeO3UDQJWErO0twjJs5PocLCwpWbz797khaBY3ZvPU");
echo $test;
