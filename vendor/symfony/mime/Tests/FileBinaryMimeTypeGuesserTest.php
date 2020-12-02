<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper056b892061ac\Symfony\Component\Mime\Tests;

use _PhpScoper056b892061ac\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoper056b892061ac\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoper056b892061ac\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoper056b892061ac\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoper056b892061ac\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
