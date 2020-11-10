<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScopera31d0d6ff47a\GuzzleHttp\ClientInterface;
use _PhpScopera31d0d6ff47a\GuzzleHttp\Exception\BadResponseException;
use _PhpScopera31d0d6ff47a\GuzzleHttp\Psr7\Request;
use _PhpScopera31d0d6ff47a\Nette\Utils\Json;
use _PhpScopera31d0d6ff47a\Nette\Utils\JsonException;
use _PhpScopera31d0d6ff47a\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScopera31d0d6ff47a\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScopera31d0d6ff47a\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScopera31d0d6ff47a\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScopera31d0d6ff47a\Nette\Utils\Json::decode($content, \_PhpScopera31d0d6ff47a\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScopera31d0d6ff47a\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScopera31d0d6ff47a\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScopera31d0d6ff47a\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
