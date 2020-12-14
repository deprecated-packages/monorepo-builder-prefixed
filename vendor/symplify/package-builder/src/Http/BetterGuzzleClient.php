<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperdd624bbcb4e5\GuzzleHttp\ClientInterface;
use _PhpScoperdd624bbcb4e5\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperdd624bbcb4e5\GuzzleHttp\Psr7\Request;
use _PhpScoperdd624bbcb4e5\Nette\Utils\Json;
use _PhpScoperdd624bbcb4e5\Nette\Utils\JsonException;
use _PhpScoperdd624bbcb4e5\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperdd624bbcb4e5\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperdd624bbcb4e5\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperdd624bbcb4e5\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperdd624bbcb4e5\Nette\Utils\Json::decode($content, \_PhpScoperdd624bbcb4e5\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperdd624bbcb4e5\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperdd624bbcb4e5\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperdd624bbcb4e5\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
