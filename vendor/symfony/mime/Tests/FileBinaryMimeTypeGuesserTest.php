<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\Tests;

use _PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
