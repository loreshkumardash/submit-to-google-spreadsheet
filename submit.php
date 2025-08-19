<?php
require 'vendor/autoload.php';

use Google\Client;
use Google\Service\Sheets;

// Initialize Google Client
$client = new Client();
$client->setApplicationName('Google Sheets API PHP');
$client->setScopes(Sheets::SPREADSHEETS);
$client->setAuthConfig('service-account.json');
$client->setAccessType('offline');

// Initialize Sheets service
$service = new Sheets($client);

// Google Sheet ID and range
$spreadsheetId = '1FCfzNFtj7QHlUw6JGylowjGzDQOYXas_EdZEWHQkXwI';
$range = 'Sheet1!A:B';

// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';

if($name && $email) {
    $values = [[$name, $email]];
    $body = new \Google_Service_Sheets_ValueRange(['values' => $values]);
    $params = ['valueInputOption' => 'RAW'];

    $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

    echo 'Submitted successfully!';
} else {
    echo 'Please fill in all fields.';
}
?>
