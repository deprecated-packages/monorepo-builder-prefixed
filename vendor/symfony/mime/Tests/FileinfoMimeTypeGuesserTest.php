<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera5e5d165d78c\Symfony\Component\Mime\Tests;

use _PhpScopera5e5d165d78c\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScopera5e5d165d78c\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScopera5e5d165d78c\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScopera5e5d165d78c\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScopera5e5d165d78c\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
