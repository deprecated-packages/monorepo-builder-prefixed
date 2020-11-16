<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperb1086ecf2bcb\GuzzleHttp\ClientInterface;
use _PhpScoperb1086ecf2bcb\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperb1086ecf2bcb\GuzzleHttp\Psr7\Request;
use _PhpScoperb1086ecf2bcb\Nette\Utils\Json;
use _PhpScoperb1086ecf2bcb\Nette\Utils\JsonException;
use _PhpScoperb1086ecf2bcb\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperb1086ecf2bcb\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperb1086ecf2bcb\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperb1086ecf2bcb\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperb1086ecf2bcb\Nette\Utils\Json::decode($content, \_PhpScoperb1086ecf2bcb\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperb1086ecf2bcb\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperb1086ecf2bcb\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperb1086ecf2bcb\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
