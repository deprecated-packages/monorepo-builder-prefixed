<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb1086ecf2bcb\Symfony\Component\Mime\Tests;

use _PhpScoperb1086ecf2bcb\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperb1086ecf2bcb\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperb1086ecf2bcb\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperb1086ecf2bcb\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperb1086ecf2bcb\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
