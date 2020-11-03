<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperab3ccffcffcd\GuzzleHttp\ClientInterface;
use _PhpScoperab3ccffcffcd\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperab3ccffcffcd\GuzzleHttp\Psr7\Request;
use _PhpScoperab3ccffcffcd\Nette\Utils\Json;
use _PhpScoperab3ccffcffcd\Nette\Utils\JsonException;
use _PhpScoperab3ccffcffcd\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperab3ccffcffcd\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperab3ccffcffcd\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperab3ccffcffcd\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperab3ccffcffcd\Nette\Utils\Json::decode($content, \_PhpScoperab3ccffcffcd\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperab3ccffcffcd\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperab3ccffcffcd\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperab3ccffcffcd\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
