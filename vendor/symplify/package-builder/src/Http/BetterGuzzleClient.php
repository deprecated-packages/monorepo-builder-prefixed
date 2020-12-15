<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperd79f30a2f8be\GuzzleHttp\ClientInterface;
use _PhpScoperd79f30a2f8be\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperd79f30a2f8be\GuzzleHttp\Psr7\Request;
use _PhpScoperd79f30a2f8be\Nette\Utils\Json;
use _PhpScoperd79f30a2f8be\Nette\Utils\JsonException;
use _PhpScoperd79f30a2f8be\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperd79f30a2f8be\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperd79f30a2f8be\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperd79f30a2f8be\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperd79f30a2f8be\Nette\Utils\Json::decode($content, \_PhpScoperd79f30a2f8be\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperd79f30a2f8be\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperd79f30a2f8be\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperd79f30a2f8be\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
