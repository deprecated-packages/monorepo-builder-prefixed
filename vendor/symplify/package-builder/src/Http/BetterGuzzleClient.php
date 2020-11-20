<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperabca9a64438b\GuzzleHttp\ClientInterface;
use _PhpScoperabca9a64438b\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperabca9a64438b\GuzzleHttp\Psr7\Request;
use _PhpScoperabca9a64438b\Nette\Utils\Json;
use _PhpScoperabca9a64438b\Nette\Utils\JsonException;
use _PhpScoperabca9a64438b\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperabca9a64438b\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperabca9a64438b\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperabca9a64438b\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperabca9a64438b\Nette\Utils\Json::decode($content, \_PhpScoperabca9a64438b\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperabca9a64438b\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperabca9a64438b\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperabca9a64438b\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
