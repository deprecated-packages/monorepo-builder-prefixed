<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperff72c38d4e2a\GuzzleHttp\ClientInterface;
use _PhpScoperff72c38d4e2a\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperff72c38d4e2a\GuzzleHttp\Psr7\Request;
use _PhpScoperff72c38d4e2a\Nette\Utils\Json;
use _PhpScoperff72c38d4e2a\Nette\Utils\JsonException;
use _PhpScoperff72c38d4e2a\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperff72c38d4e2a\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperff72c38d4e2a\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperff72c38d4e2a\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperff72c38d4e2a\Nette\Utils\Json::decode($content, \_PhpScoperff72c38d4e2a\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperff72c38d4e2a\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperff72c38d4e2a\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperff72c38d4e2a\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
