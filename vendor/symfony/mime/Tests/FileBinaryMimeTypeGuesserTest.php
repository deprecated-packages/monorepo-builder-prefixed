<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperabca9a64438b\Symfony\Component\Mime\Tests;

use _PhpScoperabca9a64438b\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperabca9a64438b\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperabca9a64438b\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperabca9a64438b\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperabca9a64438b\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
