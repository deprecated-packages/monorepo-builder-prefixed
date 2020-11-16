<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperafeb7177e88e\GuzzleHttp\ClientInterface;
use _PhpScoperafeb7177e88e\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperafeb7177e88e\GuzzleHttp\Psr7\Request;
use _PhpScoperafeb7177e88e\Nette\Utils\Json;
use _PhpScoperafeb7177e88e\Nette\Utils\JsonException;
use _PhpScoperafeb7177e88e\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperafeb7177e88e\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperafeb7177e88e\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperafeb7177e88e\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperafeb7177e88e\Nette\Utils\Json::decode($content, \_PhpScoperafeb7177e88e\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperafeb7177e88e\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperafeb7177e88e\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperafeb7177e88e\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
