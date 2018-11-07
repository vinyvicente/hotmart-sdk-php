<?php
declare(strict_types=1);

namespace Hotmart;

use GuzzleHttp\Client;

class Hotmart
{
    private const ENDPOINT = 'http://api.hotmart.com.br/';

    /**
     * @var Connection
     */
    private $connection;

    public function run(Connection $connection): string
    {
        $this->connection = $connection;

        $client = new Client([
            'base_uri' => self::ENDPOINT,
        ]);

        try {
            $request = $client->post('/oauth/access_token', [
                'form_params' => [
                    'client_id' => $connection->getAppId(),
                    'client_secret' => $connection->getAppSecret(),
                    'redirect_uri' => $connection->getUrlRedirect(),
                    'code' => $connection->getCode(),
                    'grant_type' => $connection->getGrantType(),
                ],
            ]);

            return $request->getBody()->getContents();
        } catch (\Exception $e) {
        }

        return '';
    }
}
