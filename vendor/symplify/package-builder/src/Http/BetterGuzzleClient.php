<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperaf523e5605cc\GuzzleHttp\ClientInterface;
use _PhpScoperaf523e5605cc\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperaf523e5605cc\GuzzleHttp\Psr7\Request;
use _PhpScoperaf523e5605cc\Nette\Utils\Json;
use _PhpScoperaf523e5605cc\Nette\Utils\JsonException;
use _PhpScoperaf523e5605cc\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperaf523e5605cc\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperaf523e5605cc\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperaf523e5605cc\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperaf523e5605cc\Nette\Utils\Json::decode($content, \_PhpScoperaf523e5605cc\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperaf523e5605cc\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperaf523e5605cc\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperaf523e5605cc\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
