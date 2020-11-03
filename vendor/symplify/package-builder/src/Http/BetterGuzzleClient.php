<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperee8f03533f8b\GuzzleHttp\ClientInterface;
use _PhpScoperee8f03533f8b\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperee8f03533f8b\GuzzleHttp\Psr7\Request;
use _PhpScoperee8f03533f8b\Nette\Utils\Json;
use _PhpScoperee8f03533f8b\Nette\Utils\JsonException;
use _PhpScoperee8f03533f8b\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperee8f03533f8b\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperee8f03533f8b\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperee8f03533f8b\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperee8f03533f8b\Nette\Utils\Json::decode($content, \_PhpScoperee8f03533f8b\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperee8f03533f8b\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperee8f03533f8b\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperee8f03533f8b\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
