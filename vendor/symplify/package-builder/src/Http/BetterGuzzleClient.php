<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperd607abf1de8e\GuzzleHttp\ClientInterface;
use _PhpScoperd607abf1de8e\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperd607abf1de8e\GuzzleHttp\Psr7\Request;
use _PhpScoperd607abf1de8e\Nette\Utils\Json;
use _PhpScoperd607abf1de8e\Nette\Utils\JsonException;
use _PhpScoperd607abf1de8e\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperd607abf1de8e\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperd607abf1de8e\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperd607abf1de8e\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperd607abf1de8e\Nette\Utils\Json::decode($content, \_PhpScoperd607abf1de8e\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperd607abf1de8e\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperd607abf1de8e\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperd607abf1de8e\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
