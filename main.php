<?php declare(strict_types=1);

use App\ApiClient;

require_once "vendor/autoload.php";

$regCode = readline("Please enter registration number: ");

if (!is_numeric($regCode)) {
    echo "Error: Input must be a number" . PHP_EOL;
    exit;
}

$apiClient = new ApiClient();
$businessReport = $apiClient->getReport((int)$regCode);

if ($businessReport != null) {
    echo "--------------------------------------------------------------------" . PHP_EOL;
    echo "Business report for registration number: $regCode" . PHP_EOL;
    echo "Business title: " . $businessReport->getName() . PHP_EOL;
    echo "SEPA identification: " . $businessReport->getSepa() . PHP_EOL;
    echo "Address: " . $businessReport->getAddress() . PHP_EOL;
    echo "Registration date: " . $businessReport->getRegistred() . PHP_EOL;
    echo "Rank: " . $businessReport->getRank() . PHP_EOL;
} else {
    echo "There is no such company. Please try again" . PHP_EOL;
}