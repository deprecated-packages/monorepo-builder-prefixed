<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperb3d59f519671\GuzzleHttp\ClientInterface;
use _PhpScoperb3d59f519671\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperb3d59f519671\GuzzleHttp\Psr7\Request;
use _PhpScoperb3d59f519671\Nette\Utils\Json;
use _PhpScoperb3d59f519671\Nette\Utils\JsonException;
use _PhpScoperb3d59f519671\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperb3d59f519671\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperb3d59f519671\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperb3d59f519671\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperb3d59f519671\Nette\Utils\Json::decode($content, \_PhpScoperb3d59f519671\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperb3d59f519671\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperb3d59f519671\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperb3d59f519671\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
