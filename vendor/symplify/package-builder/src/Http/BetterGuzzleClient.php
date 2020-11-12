<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperad3f32c1b87c\GuzzleHttp\ClientInterface;
use _PhpScoperad3f32c1b87c\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperad3f32c1b87c\GuzzleHttp\Psr7\Request;
use _PhpScoperad3f32c1b87c\Nette\Utils\Json;
use _PhpScoperad3f32c1b87c\Nette\Utils\JsonException;
use _PhpScoperad3f32c1b87c\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperad3f32c1b87c\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperad3f32c1b87c\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperad3f32c1b87c\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperad3f32c1b87c\Nette\Utils\Json::decode($content, \_PhpScoperad3f32c1b87c\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperad3f32c1b87c\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperad3f32c1b87c\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperad3f32c1b87c\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
