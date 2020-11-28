<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Test\Constraint;

use _PhpScoperbe77f3b0e77d\PHPUnit\Framework\Constraint\Constraint;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Cookie;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Response;
final class ResponseHasCookie extends \_PhpScoperbe77f3b0e77d\PHPUnit\Framework\Constraint\Constraint
{
    private $name;
    private $path;
    private $domain;
    public function __construct(string $name, string $path = '/', string $domain = null)
    {
        $this->name = $name;
        $this->path = $path;
        $this->domain = $domain;
    }
    /**
     * {@inheritdoc}
     */
    public function toString() : string
    {
        $str = \sprintf('has cookie "%s"', $this->name);
        if ('/' !== $this->path) {
            $str .= \sprintf(' with path "%s"', $this->path);
        }
        if ($this->domain) {
            $str .= \sprintf(' for domain "%s"', $this->domain);
        }
        return $str;
    }
    /**
     * @param Response $response
     *
     * {@inheritdoc}
     */
    protected function matches($response) : bool
    {
        return null !== $this->getCookie($response);
    }
    /**
     * @param Response $response
     *
     * {@inheritdoc}
     */
    protected function failureDescription($response) : string
    {
        return 'the Response ' . $this->toString();
    }
    private function getCookie(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Response $response) : ?\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Cookie
    {
        $cookies = $response->headers->getCookies();
        $filteredCookies = \array_filter($cookies, function (\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Cookie $cookie) {
            return $cookie->getName() === $this->name && $cookie->getPath() === $this->path && $cookie->getDomain() === $this->domain;
        });
        return \reset($filteredCookies) ?: null;
    }
}
