<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperb25e75e9febe\GuzzleHttp\ClientInterface;
use _PhpScoperb25e75e9febe\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperb25e75e9febe\GuzzleHttp\Psr7\Request;
use _PhpScoperb25e75e9febe\Nette\Utils\Json;
use _PhpScoperb25e75e9febe\Nette\Utils\JsonException;
use _PhpScoperb25e75e9febe\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperb25e75e9febe\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperb25e75e9febe\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperb25e75e9febe\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperb25e75e9febe\Nette\Utils\Json::decode($content, \_PhpScoperb25e75e9febe\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperb25e75e9febe\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperb25e75e9febe\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperb25e75e9febe\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
