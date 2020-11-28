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
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Response;
final class ResponseIsRedirected extends \_PhpScoperbe77f3b0e77d\PHPUnit\Framework\Constraint\Constraint
{
    /**
     * {@inheritdoc}
     */
    public function toString() : string
    {
        return 'is redirected';
    }
    /**
     * @param Response $response
     *
     * {@inheritdoc}
     */
    protected function matches($response) : bool
    {
        return $response->isRedirect();
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
    /**
     * @param Response $response
     *
     * {@inheritdoc}
     */
    protected function additionalFailureDescription($response) : string
    {
        return (string) $response;
    }
}
