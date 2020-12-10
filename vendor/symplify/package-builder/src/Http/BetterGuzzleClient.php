<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperfccd2ca01403\GuzzleHttp\ClientInterface;
use _PhpScoperfccd2ca01403\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperfccd2ca01403\GuzzleHttp\Psr7\Request;
use _PhpScoperfccd2ca01403\Nette\Utils\Json;
use _PhpScoperfccd2ca01403\Nette\Utils\JsonException;
use _PhpScoperfccd2ca01403\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperfccd2ca01403\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperfccd2ca01403\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperfccd2ca01403\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperfccd2ca01403\Nette\Utils\Json::decode($content, \_PhpScoperfccd2ca01403\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperfccd2ca01403\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperfccd2ca01403\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperfccd2ca01403\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
