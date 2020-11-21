<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbc89827b806f\Symfony\Component\Mime\Tests;

use _PhpScoperbc89827b806f\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperbc89827b806f\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperbc89827b806f\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperbc89827b806f\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperbc89827b806f\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
