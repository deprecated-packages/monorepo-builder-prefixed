<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperddf2171d3d2c\GuzzleHttp\ClientInterface;
use _PhpScoperddf2171d3d2c\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperddf2171d3d2c\GuzzleHttp\Psr7\Request;
use _PhpScoperddf2171d3d2c\Nette\Utils\Json;
use _PhpScoperddf2171d3d2c\Nette\Utils\JsonException;
use _PhpScoperddf2171d3d2c\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperddf2171d3d2c\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperddf2171d3d2c\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperddf2171d3d2c\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperddf2171d3d2c\Nette\Utils\Json::decode($content, \_PhpScoperddf2171d3d2c\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperddf2171d3d2c\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperddf2171d3d2c\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperddf2171d3d2c\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
