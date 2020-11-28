<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperbe77f3b0e77d\GuzzleHttp\ClientInterface;
use _PhpScoperbe77f3b0e77d\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperbe77f3b0e77d\GuzzleHttp\Psr7\Request;
use _PhpScoperbe77f3b0e77d\Nette\Utils\Json;
use _PhpScoperbe77f3b0e77d\Nette\Utils\JsonException;
use _PhpScoperbe77f3b0e77d\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperbe77f3b0e77d\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperbe77f3b0e77d\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperbe77f3b0e77d\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperbe77f3b0e77d\Nette\Utils\Json::decode($content, \_PhpScoperbe77f3b0e77d\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperbe77f3b0e77d\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperbe77f3b0e77d\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperbe77f3b0e77d\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
