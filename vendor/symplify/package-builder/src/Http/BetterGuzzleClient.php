<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperce084f4275dd\GuzzleHttp\ClientInterface;
use _PhpScoperce084f4275dd\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperce084f4275dd\GuzzleHttp\Psr7\Request;
use _PhpScoperce084f4275dd\Nette\Utils\Json;
use _PhpScoperce084f4275dd\Nette\Utils\JsonException;
use _PhpScoperce084f4275dd\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperce084f4275dd\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperce084f4275dd\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperce084f4275dd\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperce084f4275dd\Nette\Utils\Json::decode($content, \_PhpScoperce084f4275dd\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperce084f4275dd\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperce084f4275dd\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperce084f4275dd\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
