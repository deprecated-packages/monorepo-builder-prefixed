<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaf523e5605cc\Symfony\Component\Mime\Tests;

use _PhpScoperaf523e5605cc\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperaf523e5605cc\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperaf523e5605cc\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperaf523e5605cc\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperaf523e5605cc\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
