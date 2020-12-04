<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper56e9de378e59\GuzzleHttp\ClientInterface;
use _PhpScoper56e9de378e59\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper56e9de378e59\GuzzleHttp\Psr7\Request;
use _PhpScoper56e9de378e59\Nette\Utils\Json;
use _PhpScoper56e9de378e59\Nette\Utils\JsonException;
use _PhpScoper56e9de378e59\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper56e9de378e59\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper56e9de378e59\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper56e9de378e59\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper56e9de378e59\Nette\Utils\Json::decode($content, \_PhpScoper56e9de378e59\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper56e9de378e59\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper56e9de378e59\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper56e9de378e59\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
