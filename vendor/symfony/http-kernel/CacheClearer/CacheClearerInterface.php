<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb56893078f23\Symfony\Component\HttpKernel\CacheClearer;

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
