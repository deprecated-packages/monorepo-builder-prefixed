<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperfd1a6a0ee9af\GuzzleHttp\ClientInterface;
use _PhpScoperfd1a6a0ee9af\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperfd1a6a0ee9af\GuzzleHttp\Psr7\Request;
use _PhpScoperfd1a6a0ee9af\Nette\Utils\Json;
use _PhpScoperfd1a6a0ee9af\Nette\Utils\JsonException;
use _PhpScoperfd1a6a0ee9af\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperfd1a6a0ee9af\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperfd1a6a0ee9af\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperfd1a6a0ee9af\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperfd1a6a0ee9af\Nette\Utils\Json::decode($content, \_PhpScoperfd1a6a0ee9af\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperfd1a6a0ee9af\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperfd1a6a0ee9af\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperfd1a6a0ee9af\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
