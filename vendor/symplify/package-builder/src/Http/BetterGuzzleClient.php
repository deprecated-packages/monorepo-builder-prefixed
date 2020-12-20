<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperb2067b9f36f8\GuzzleHttp\ClientInterface;
use _PhpScoperb2067b9f36f8\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperb2067b9f36f8\GuzzleHttp\Psr7\Request;
use _PhpScoperb2067b9f36f8\Nette\Utils\Json;
use _PhpScoperb2067b9f36f8\Nette\Utils\JsonException;
use _PhpScoperb2067b9f36f8\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperb2067b9f36f8\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperb2067b9f36f8\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperb2067b9f36f8\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperb2067b9f36f8\Nette\Utils\Json::decode($content, \_PhpScoperb2067b9f36f8\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperb2067b9f36f8\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperb2067b9f36f8\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperb2067b9f36f8\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
