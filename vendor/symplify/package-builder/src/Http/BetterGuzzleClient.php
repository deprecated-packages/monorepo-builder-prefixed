<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper51570eac51fe\GuzzleHttp\ClientInterface;
use _PhpScoper51570eac51fe\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper51570eac51fe\GuzzleHttp\Psr7\Request;
use _PhpScoper51570eac51fe\Nette\Utils\Json;
use _PhpScoper51570eac51fe\Nette\Utils\JsonException;
use _PhpScoper51570eac51fe\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper51570eac51fe\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper51570eac51fe\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper51570eac51fe\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper51570eac51fe\Nette\Utils\Json::decode($content, \_PhpScoper51570eac51fe\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper51570eac51fe\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper51570eac51fe\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper51570eac51fe\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
