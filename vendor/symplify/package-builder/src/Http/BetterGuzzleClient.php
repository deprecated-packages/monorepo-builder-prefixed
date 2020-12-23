<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScopere0f28e6b9bde\GuzzleHttp\ClientInterface;
use _PhpScopere0f28e6b9bde\GuzzleHttp\Exception\BadResponseException;
use _PhpScopere0f28e6b9bde\GuzzleHttp\Psr7\Request;
use _PhpScopere0f28e6b9bde\Nette\Utils\Json;
use _PhpScopere0f28e6b9bde\Nette\Utils\JsonException;
use _PhpScopere0f28e6b9bde\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScopere0f28e6b9bde\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScopere0f28e6b9bde\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScopere0f28e6b9bde\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScopere0f28e6b9bde\Nette\Utils\Json::decode($content, \_PhpScopere0f28e6b9bde\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScopere0f28e6b9bde\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScopere0f28e6b9bde\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScopere0f28e6b9bde\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
