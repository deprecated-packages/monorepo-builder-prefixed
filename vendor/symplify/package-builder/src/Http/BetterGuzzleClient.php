<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper9a38f5ee6cbc\GuzzleHttp\ClientInterface;
use _PhpScoper9a38f5ee6cbc\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper9a38f5ee6cbc\GuzzleHttp\Psr7\Request;
use _PhpScoper9a38f5ee6cbc\Nette\Utils\Json;
use _PhpScoper9a38f5ee6cbc\Nette\Utils\JsonException;
use _PhpScoper9a38f5ee6cbc\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper9a38f5ee6cbc\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper9a38f5ee6cbc\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper9a38f5ee6cbc\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper9a38f5ee6cbc\Nette\Utils\Json::decode($content, \_PhpScoper9a38f5ee6cbc\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper9a38f5ee6cbc\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper9a38f5ee6cbc\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper9a38f5ee6cbc\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
