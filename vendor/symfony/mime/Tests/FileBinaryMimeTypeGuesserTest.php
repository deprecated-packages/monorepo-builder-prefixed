<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper120e1a259c7c\Symfony\Component\Mime\Tests;

use _PhpScoper120e1a259c7c\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoper120e1a259c7c\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoper120e1a259c7c\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoper120e1a259c7c\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoper120e1a259c7c\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
