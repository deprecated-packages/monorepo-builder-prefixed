<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperad5317739bda\Symfony\Component\Mime\Tests;

use _PhpScoperad5317739bda\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperad5317739bda\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperad5317739bda\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperad5317739bda\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperad5317739bda\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
