<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoper43a95e2f69bc\GuzzleHttp\ClientInterface;
use _PhpScoper43a95e2f69bc\GuzzleHttp\Exception\BadResponseException;
use _PhpScoper43a95e2f69bc\GuzzleHttp\Psr7\Request;
use _PhpScoper43a95e2f69bc\Nette\Utils\Json;
use _PhpScoper43a95e2f69bc\Nette\Utils\JsonException;
use _PhpScoper43a95e2f69bc\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoper43a95e2f69bc\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoper43a95e2f69bc\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoper43a95e2f69bc\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoper43a95e2f69bc\Nette\Utils\Json::decode($content, \_PhpScoper43a95e2f69bc\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoper43a95e2f69bc\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoper43a95e2f69bc\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoper43a95e2f69bc\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
