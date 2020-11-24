<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper674b08d66902\GuzzleHttp\ClientInterface;
use _PhpScoper674b08d66902\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper674b08d66902\GuzzleHttp\Psr7\Request;
use _PhpScoper674b08d66902\Nette\Utils\Json;
use _PhpScoper674b08d66902\Nette\Utils\JsonException;
use _PhpScoper674b08d66902\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper674b08d66902\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper674b08d66902\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper674b08d66902\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper674b08d66902\Nette\Utils\Json::decode($content, \_PhpScoper674b08d66902\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper674b08d66902\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper674b08d66902\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper674b08d66902\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
