<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Http;

use _PhpScoperd3e9cfbe9d90\GuzzleHttp\ClientInterface;
use _PhpScoperd3e9cfbe9d90\GuzzleHttp\Exception\BadResponseException;
use _PhpScoperd3e9cfbe9d90\GuzzleHttp\Psr7\Request;
use _PhpScoperd3e9cfbe9d90\Nette\Utils\Json;
use _PhpScoperd3e9cfbe9d90\Nette\Utils\JsonException;
use _PhpScoperd3e9cfbe9d90\Psr\Http\Message\ResponseInterface;
final class BetterGuzzleClient
{
    /**
     * @var ClientInterface
     */
    private $client;
    public function __construct(\_PhpScoperd3e9cfbe9d90\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @api
     * @return mixed[]|mixed|void
     */
    public function requestToJson(string $url) : array
    {
        $request = new \_PhpScoperd3e9cfbe9d90\GuzzleHttp\Psr7\Request('GET', $url);
        $response = $this->client->send($request);
        if (!$this->isSuccessCode($response)) {
            throw \_PhpScoperd3e9cfbe9d90\GuzzleHttp\Exception\BadResponseException::create($request, $response);
        }
        $content = (string) $response->getBody();
        if ($content === '') {
            return [];
        }
        try {
            return \_PhpScoperd3e9cfbe9d90\Nette\Utils\Json::decode($content, \_PhpScoperd3e9cfbe9d90\Nette\Utils\Json::FORCE_ARRAY);
        } catch (\_PhpScoperd3e9cfbe9d90\Nette\Utils\JsonException $jsonException) {
            throw new \_PhpScoperd3e9cfbe9d90\Nette\Utils\JsonException('Syntax error while decoding:' . $content, $jsonException->getLine(), $jsonException);
        }
    }
    private function isSuccessCode(\_PhpScoperd3e9cfbe9d90\Psr\Http\Message\ResponseInterface $response) : bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
