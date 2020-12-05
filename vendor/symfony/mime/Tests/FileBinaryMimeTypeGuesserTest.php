<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper37b79542cc43\Symfony\Component\Mime\Tests;

use _PhpScoper37b79542cc43\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoper37b79542cc43\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoper37b79542cc43\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoper37b79542cc43\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoper37b79542cc43\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
