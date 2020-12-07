<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperab93339c6bca\GuzzleHttp\ClientInterface;
use _PhpScoperab93339c6bca\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperab93339c6bca\GuzzleHttp\Psr7\Request;
use _PhpScoperab93339c6bca\Nette\Utils\Json;
use _PhpScoperab93339c6bca\Nette\Utils\JsonException;
use _PhpScoperab93339c6bca\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperab93339c6bca\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperab93339c6bca\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperab93339c6bca\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperab93339c6bca\Nette\Utils\Json::decode($content, \_PhpScoperab93339c6bca\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperab93339c6bca\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperab93339c6bca\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperab93339c6bca\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
