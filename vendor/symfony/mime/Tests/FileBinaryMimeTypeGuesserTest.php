<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd04ce6546762\Symfony\Component\Mime\Tests;

use _PhpScoperd04ce6546762\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperd04ce6546762\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperd04ce6546762\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperd04ce6546762\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperd04ce6546762\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
