<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperf9ff1c3447b1\GuzzleHttp\ClientInterface;
use _PhpScoperf9ff1c3447b1\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperf9ff1c3447b1\GuzzleHttp\Psr7\Request;
use _PhpScoperf9ff1c3447b1\Nette\Utils\Json;
use _PhpScoperf9ff1c3447b1\Nette\Utils\JsonException;
use _PhpScoperf9ff1c3447b1\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperf9ff1c3447b1\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperf9ff1c3447b1\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperf9ff1c3447b1\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperf9ff1c3447b1\Nette\Utils\Json::decode($content, \_PhpScoperf9ff1c3447b1\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperf9ff1c3447b1\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperf9ff1c3447b1\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperf9ff1c3447b1\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
