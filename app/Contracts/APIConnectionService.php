<?php

namespace App\Contracts;

/**
 * Interface APIConnectionService
 * 
 * Defines the contract for an API connection service.
 * This service should provide a method to fetch data from an API endpoint.
 * 
 * @package App
 */
interface APIConnectionService
{
    /**
     * Fetches data from a specified API endpoint.
     *
     * @param string $apiEndpoint The API endpoint URL to fetch data from.
     * 
     * @return mixed The response from the API, typically an array or object (depending on the implementation).
     */
    public function getAll(string $apiEndpoint): mixed;
}