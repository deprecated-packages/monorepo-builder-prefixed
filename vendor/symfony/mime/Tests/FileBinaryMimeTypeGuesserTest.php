<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperafeb7177e88e\Symfony\Component\Mime\Tests;

use _PhpScoperafeb7177e88e\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperafeb7177e88e\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperafeb7177e88e\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperafeb7177e88e\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperafeb7177e88e\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
