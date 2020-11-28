<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\Mime\Tests;

use _PhpScoperbe77f3b0e77d\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperbe77f3b0e77d\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperbe77f3b0e77d\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperbe77f3b0e77d\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperbe77f3b0e77d\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
