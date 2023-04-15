<?php declare(strict_types=1);

namespace App;

use App\Models\BusinessReport;
use GuzzleHttp\Client;

class ApiClient
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getReport(int $regCode): BusinessReport
    {
        $url = "https://data.gov.lv/dati/lv/api/3/action/datastore_search?q={$regCode}&resource_id=25e80bf3-f107-4ab4-89ef-251b5b9374e9";
        $response = $this->client->request('GET', $url);
        $businessData = json_decode($response->getBody()->getContents());

        return new BusinessReport(
            $businessData->result->records[0]->name,
            $businessData->result->records[0]->sepa,
            $businessData->result->records[0]->address,
            $businessData->result->records[0]->registered,
            $businessData->result->records[0]->rank
        );
    }
}
