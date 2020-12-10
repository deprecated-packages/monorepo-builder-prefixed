<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfccd2ca01403\Symfony\Component\Mime\Tests;

use _PhpScoperfccd2ca01403\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperfccd2ca01403\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperfccd2ca01403\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperfccd2ca01403\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperfccd2ca01403\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
