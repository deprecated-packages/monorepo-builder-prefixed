<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperad5317739bda\GuzzleHttp\ClientInterface;
use _PhpScoperad5317739bda\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperad5317739bda\GuzzleHttp\Psr7\Request;
use _PhpScoperad5317739bda\Nette\Utils\Json;
use _PhpScoperad5317739bda\Nette\Utils\JsonException;
use _PhpScoperad5317739bda\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperad5317739bda\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperad5317739bda\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperad5317739bda\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperad5317739bda\Nette\Utils\Json::decode($content, \_PhpScoperad5317739bda\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperad5317739bda\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperad5317739bda\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperad5317739bda\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
