<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperfa13b4bfa005\GuzzleHttp\ClientInterface;
use _PhpScoperfa13b4bfa005\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperfa13b4bfa005\GuzzleHttp\Psr7\Request;
use _PhpScoperfa13b4bfa005\Nette\Utils\Json;
use _PhpScoperfa13b4bfa005\Nette\Utils\JsonException;
use _PhpScoperfa13b4bfa005\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperfa13b4bfa005\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperfa13b4bfa005\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperfa13b4bfa005\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperfa13b4bfa005\Nette\Utils\Json::decode($content, \_PhpScoperfa13b4bfa005\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperfa13b4bfa005\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperfa13b4bfa005\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperfa13b4bfa005\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
