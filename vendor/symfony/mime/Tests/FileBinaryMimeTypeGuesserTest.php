<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdab52924cf3e\Symfony\Component\Mime\Tests;

use _PhpScoperdab52924cf3e\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperdab52924cf3e\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperdab52924cf3e\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperdab52924cf3e\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperdab52924cf3e\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
