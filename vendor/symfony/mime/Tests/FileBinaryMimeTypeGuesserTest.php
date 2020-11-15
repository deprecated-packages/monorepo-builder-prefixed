<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb25e75e9febe\Symfony\Component\Mime\Tests;

use _PhpScoperb25e75e9febe\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperb25e75e9febe\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperb25e75e9febe\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperb25e75e9febe\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperb25e75e9febe\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
