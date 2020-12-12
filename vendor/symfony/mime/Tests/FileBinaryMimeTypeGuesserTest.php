<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf40000691b7b\Symfony\Component\Mime\Tests;

use _PhpScoperf40000691b7b\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperf40000691b7b\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperf40000691b7b\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperf40000691b7b\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperf40000691b7b\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
