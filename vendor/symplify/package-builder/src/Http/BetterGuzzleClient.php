<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScopere4e8aecb81b9\GuzzleHttp\ClientInterface;
use _PhpScopere4e8aecb81b9\GuzzleHttp\Exception\BadResponseException;
use _PhpScopere4e8aecb81b9\GuzzleHttp\Psr7\Request;
use _PhpScopere4e8aecb81b9\Nette\Utils\Json;
use _PhpScopere4e8aecb81b9\Nette\Utils\JsonException;
use _PhpScopere4e8aecb81b9\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScopere4e8aecb81b9\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScopere4e8aecb81b9\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScopere4e8aecb81b9\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScopere4e8aecb81b9\Nette\Utils\Json::decode($content, \_PhpScopere4e8aecb81b9\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScopere4e8aecb81b9\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScopere4e8aecb81b9\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScopere4e8aecb81b9\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
