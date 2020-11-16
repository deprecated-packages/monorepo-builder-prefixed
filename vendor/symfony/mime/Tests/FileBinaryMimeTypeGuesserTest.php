<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdfa889d8967a\Symfony\Component\Mime\Tests;

use _PhpScoperdfa889d8967a\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperdfa889d8967a\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperdfa889d8967a\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperdfa889d8967a\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperdfa889d8967a\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
