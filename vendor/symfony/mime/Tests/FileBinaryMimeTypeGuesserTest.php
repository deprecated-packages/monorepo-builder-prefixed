<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperac0a9a33ae94\Symfony\Component\Mime\Tests;

use _PhpScoperac0a9a33ae94\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperac0a9a33ae94\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperac0a9a33ae94\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperac0a9a33ae94\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperac0a9a33ae94\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
