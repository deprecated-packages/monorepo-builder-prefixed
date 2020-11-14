<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperef4638f5d8b1\Symfony\Component\Mime\Tests;

use _PhpScoperef4638f5d8b1\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperef4638f5d8b1\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperef4638f5d8b1\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperef4638f5d8b1\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperef4638f5d8b1\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
