<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScopereaa086e6f852\GuzzleHttp\ClientInterface;
use _PhpScopereaa086e6f852\GuzzleHttp\Exception\BadResponseException;
use _PhpScopereaa086e6f852\GuzzleHttp\Psr7\Request;
use _PhpScopereaa086e6f852\Nette\Utils\Json;
use _PhpScopereaa086e6f852\Nette\Utils\JsonException;
use _PhpScopereaa086e6f852\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScopereaa086e6f852\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScopereaa086e6f852\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScopereaa086e6f852\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScopereaa086e6f852\Nette\Utils\Json::decode($content, \_PhpScopereaa086e6f852\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScopereaa086e6f852\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScopereaa086e6f852\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScopereaa086e6f852\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
