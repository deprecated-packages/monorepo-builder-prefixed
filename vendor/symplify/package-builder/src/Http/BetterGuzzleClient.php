<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScopera763b4be90d0\GuzzleHttp\ClientInterface;
use _PhpScopera763b4be90d0\GuzzleHttp\Exception\BadResponseException;
use _PhpScopera763b4be90d0\GuzzleHttp\Psr7\Request;
use _PhpScopera763b4be90d0\Nette\Utils\Json;
use _PhpScopera763b4be90d0\Nette\Utils\JsonException;
use _PhpScopera763b4be90d0\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScopera763b4be90d0\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScopera763b4be90d0\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScopera763b4be90d0\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScopera763b4be90d0\Nette\Utils\Json::decode($content, \_PhpScopera763b4be90d0\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScopera763b4be90d0\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScopera763b4be90d0\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScopera763b4be90d0\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
