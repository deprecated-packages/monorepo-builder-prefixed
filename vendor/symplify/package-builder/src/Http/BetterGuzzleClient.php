<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperdbf49b510e11\GuzzleHttp\ClientInterface;
use _PhpScoperdbf49b510e11\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperdbf49b510e11\GuzzleHttp\Psr7\Request;
use _PhpScoperdbf49b510e11\Nette\Utils\Json;
use _PhpScoperdbf49b510e11\Nette\Utils\JsonException;
use _PhpScoperdbf49b510e11\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperdbf49b510e11\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperdbf49b510e11\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperdbf49b510e11\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperdbf49b510e11\Nette\Utils\Json::decode($content, \_PhpScoperdbf49b510e11\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperdbf49b510e11\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperdbf49b510e11\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperdbf49b510e11\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
