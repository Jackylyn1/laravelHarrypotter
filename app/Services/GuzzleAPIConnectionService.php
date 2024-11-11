<?php
namespace App\Services;

use GuzzleHttp\Client;
use App\Contracts\APIConnectionService;

class GuzzleAPIConnectionService extends Service implements APIConnectionService
{
    /**
     * Get All results of given API
     */
    public function getAll(string $endpoint): mixed
    {   
        $client = new Client(['base_uri' => env('API_URI', false)]);
        $response = $client->request('GET', $endpoint);
        if ($response->getStatusCode() !== 200 && $response->getStatusCode() !== 304) {
            throw new \Exception('Connection failed.');
        }
        return json_decode($response->getBody(), true);
    }
}