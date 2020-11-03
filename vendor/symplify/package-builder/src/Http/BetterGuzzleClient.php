<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperf701e46e48a5\GuzzleHttp\ClientInterface;
use _PhpScoperf701e46e48a5\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperf701e46e48a5\GuzzleHttp\Psr7\Request;
use _PhpScoperf701e46e48a5\Nette\Utils\Json;
use _PhpScoperf701e46e48a5\Nette\Utils\JsonException;
use _PhpScoperf701e46e48a5\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperf701e46e48a5\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperf701e46e48a5\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperf701e46e48a5\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperf701e46e48a5\Nette\Utils\Json::decode($content, \_PhpScoperf701e46e48a5\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperf701e46e48a5\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperf701e46e48a5\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperf701e46e48a5\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
