<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper97d4f3c5628a\GuzzleHttp\ClientInterface;
use _PhpScoper97d4f3c5628a\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper97d4f3c5628a\GuzzleHttp\Psr7\Request;
use _PhpScoper97d4f3c5628a\Nette\Utils\Json;
use _PhpScoper97d4f3c5628a\Nette\Utils\JsonException;
use _PhpScoper97d4f3c5628a\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper97d4f3c5628a\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper97d4f3c5628a\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper97d4f3c5628a\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper97d4f3c5628a\Nette\Utils\Json::decode($content, \_PhpScoper97d4f3c5628a\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper97d4f3c5628a\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper97d4f3c5628a\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper97d4f3c5628a\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
