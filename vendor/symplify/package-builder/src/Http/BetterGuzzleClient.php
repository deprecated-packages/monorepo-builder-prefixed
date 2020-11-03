<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperdd9048e10aae\GuzzleHttp\ClientInterface;
use _PhpScoperdd9048e10aae\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperdd9048e10aae\GuzzleHttp\Psr7\Request;
use _PhpScoperdd9048e10aae\Nette\Utils\Json;
use _PhpScoperdd9048e10aae\Nette\Utils\JsonException;
use _PhpScoperdd9048e10aae\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperdd9048e10aae\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperdd9048e10aae\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperdd9048e10aae\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperdd9048e10aae\Nette\Utils\Json::decode($content, \_PhpScoperdd9048e10aae\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperdd9048e10aae\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperdd9048e10aae\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperdd9048e10aae\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
