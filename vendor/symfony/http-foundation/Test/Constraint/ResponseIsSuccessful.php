<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper84ee03573073\Symfony\Component\HttpFoundation\Test\Constraint;

use _PhpScoper84ee03573073\PHPUnit\Framework\Constraint\Constraint;
use _PhpScoper84ee03573073\Symfony\Component\HttpFoundation\Response;
final class ResponseIsSuccessful extends \_PhpScoper84ee03573073\PHPUnit\Framework\Constraint\Constraint
{
    /**
     * {@inheritdoc}
     */
    public function toString() : string
    {
        return 'is successful';
    }
    /**
     * @param Response $response
     *
     * {@inheritdoc}
     */
    protected function matches($response) : bool
    {
        return $response->isSuccessful();
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
