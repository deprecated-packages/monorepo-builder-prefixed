<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopereaa2cae8e093\Symfony\Component\Mime\Tests;

use _PhpScopereaa2cae8e093\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScopereaa2cae8e093\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScopereaa2cae8e093\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScopereaa2cae8e093\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScopereaa2cae8e093\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
