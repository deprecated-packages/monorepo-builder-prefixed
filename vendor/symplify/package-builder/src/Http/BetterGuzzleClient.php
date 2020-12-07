<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperdab52924cf3e\GuzzleHttp\ClientInterface;
use _PhpScoperdab52924cf3e\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperdab52924cf3e\GuzzleHttp\Psr7\Request;
use _PhpScoperdab52924cf3e\Nette\Utils\Json;
use _PhpScoperdab52924cf3e\Nette\Utils\JsonException;
use _PhpScoperdab52924cf3e\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperdab52924cf3e\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperdab52924cf3e\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperdab52924cf3e\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperdab52924cf3e\Nette\Utils\Json::decode($content, \_PhpScoperdab52924cf3e\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperdab52924cf3e\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperdab52924cf3e\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperdab52924cf3e\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
