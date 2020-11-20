<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScopercdc90a6628b6\GuzzleHttp\ClientInterface;
use _PhpScopercdc90a6628b6\GuzzleHttp\Exception\BadResponseException;
use _PhpScopercdc90a6628b6\GuzzleHttp\Psr7\Request;
use _PhpScopercdc90a6628b6\Nette\Utils\Json;
use _PhpScopercdc90a6628b6\Nette\Utils\JsonException;
use _PhpScopercdc90a6628b6\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScopercdc90a6628b6\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScopercdc90a6628b6\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScopercdc90a6628b6\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScopercdc90a6628b6\Nette\Utils\Json::decode($content, \_PhpScopercdc90a6628b6\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScopercdc90a6628b6\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScopercdc90a6628b6\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScopercdc90a6628b6\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
