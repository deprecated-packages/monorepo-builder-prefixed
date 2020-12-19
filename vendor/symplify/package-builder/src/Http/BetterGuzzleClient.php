<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperac0a9a33ae94\GuzzleHttp\ClientInterface;
use _PhpScoperac0a9a33ae94\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperac0a9a33ae94\GuzzleHttp\Psr7\Request;
use _PhpScoperac0a9a33ae94\Nette\Utils\Json;
use _PhpScoperac0a9a33ae94\Nette\Utils\JsonException;
use _PhpScoperac0a9a33ae94\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperac0a9a33ae94\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperac0a9a33ae94\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperac0a9a33ae94\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperac0a9a33ae94\Nette\Utils\Json::decode($content, \_PhpScoperac0a9a33ae94\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperac0a9a33ae94\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperac0a9a33ae94\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperac0a9a33ae94\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
