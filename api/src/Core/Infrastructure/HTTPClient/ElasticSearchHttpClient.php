<?php declare(strict_types = 1);

namespace App\Core\Infrastructure\HTTPClient;

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ElasticSearchHttpClient
 */
class ElasticSearchHttpClient
{
    /**
     * @var Client
     */
    private $client;

    /**
     * ElasticSearchHttpClient constructor.
     *
     * @param Client $client
     */
    public function __construct(
        Client $client
    ) {
        $this->client = $client;
    }

    /**
     * @param string $query
     * @param string $entityType
     *
     * @return array
     */
    public function search(string $query, string $entityType): array
    {
        $host = \getenv('ELASTICSEARCH_HOST');
        $port = \getenv('ELASTICSEARCH_PORT');

        $baseUrl = $host.':'.$port;
        $url = $baseUrl.'/'.$this->getIndexes($entityType).'/_search';

        $response = $this->client->post($url, [
            'headers' => ['Content-Type' => 'application/json'],
            'body' => $query,
            'http_errors' => false,
        ]);

        if ($response->getStatusCode() === Response::HTTP_OK) {
            return [
                'status_code' => $response->getStatusCode(),
                'data' => \json_decode((string) $response->getBody(), true),
            ];
        }

        return [
            'status_code' => $response->getStatusCode(),
            'data' => $response->getReasonPhrase(),
        ];
    }

    /**
     * @param string $entityType
     *
     * @return string
     */
    private function getIndexes(string $entityType): string
    {
        $appHost = \getenv('APP_HOST');

        if (!$entityType) {
            return "{$appHost}-partner_details,{$appHost}-company_details";
        }

        return "{$appHost}-{$entityType}_details";
    }
}
