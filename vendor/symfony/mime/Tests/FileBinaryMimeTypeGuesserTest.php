<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Tests;

use _PhpScoperfdd2db5e123d\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperfdd2db5e123d\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
