<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\CacheClearer;

/**
 * CacheClearerInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
interface CacheClearerInterface
{
    /**
     * Clears any caches necessary.
     *
     * @param string $cacheDir The cache directory
     */
    public function clear($cacheDir);
}
