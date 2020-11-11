<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper416e75c46c6e\Symfony\Component\HttpFoundation\Test\Constraint;

use _PhpScoper416e75c46c6e\PHPUnit\Framework\Constraint\Constraint;
use _PhpScoper416e75c46c6e\Symfony\Component\HttpFoundation\Response;
final class ResponseHeaderSame extends \_PhpScoper416e75c46c6e\PHPUnit\Framework\Constraint\Constraint
{
    private $headerName;
    private $expectedValue;
    public function __construct(string $headerName, string $expectedValue)
    {
        $this->headerName = $headerName;
        $this->expectedValue = $expectedValue;
    }
    /**
     * {@inheritdoc}
     */
    public function toString() : string
    {
        return \sprintf('has header "%s" with value "%s"', $this->headerName, $this->expectedValue);
    }
    /**
     * @param Response $response
     *
     * {@inheritdoc}
     */
    protected function matches($response) : bool
    {
        return $this->expectedValue === $response->headers->get($this->headerName, null);
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
}
