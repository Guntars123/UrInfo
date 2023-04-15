<?php declare(strict_types=1);

use App\ApiClient;

require_once "vendor/autoload.php";

$regCode = (int)readline("Please enter registration number: ");
$apiClient = new ApiClient();
$businessReport = $apiClient->getReport($regCode);

echo "--------------------------------------------------------------------" . PHP_EOL;
echo "Business report for registration number: $regCode" . PHP_EOL;
echo "Business title: " . $businessReport->getName() . PHP_EOL;
echo "SEPA identification: " . $businessReport->getSepa() . PHP_EOL;
echo "Address: " . $businessReport->getAddress() . PHP_EOL;
echo "Registration date: " . $businessReport->getRegistred() . PHP_EOL;
echo "Rank: " . $businessReport->getRank() . PHP_EOL;
