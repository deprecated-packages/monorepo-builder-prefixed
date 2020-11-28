<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\ErrorHandler\ErrorEnhancer;

interface ErrorEnhancerInterface
{
    /**
     * Returns an \Throwable instance if the class is able to improve the error, null otherwise.
     */
    public function enhance(\Throwable $error) : ?\Throwable;
}
