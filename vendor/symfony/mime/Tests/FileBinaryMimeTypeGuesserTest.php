<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperee3ad0c2c096\Symfony\Component\Mime\Tests;

use _PhpScoperee3ad0c2c096\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperee3ad0c2c096\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperee3ad0c2c096\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperee3ad0c2c096\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperee3ad0c2c096\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
