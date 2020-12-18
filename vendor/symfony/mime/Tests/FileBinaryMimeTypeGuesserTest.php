<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera1d8e0344ecf\Symfony\Component\Mime\Tests;

use _PhpScopera1d8e0344ecf\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScopera1d8e0344ecf\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScopera1d8e0344ecf\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScopera1d8e0344ecf\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScopera1d8e0344ecf\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
