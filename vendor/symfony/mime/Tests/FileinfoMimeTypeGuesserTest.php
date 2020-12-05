<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbd03d493ccc6\Symfony\Component\Mime\Tests;

use _PhpScoperbd03d493ccc6\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperbd03d493ccc6\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperbd03d493ccc6\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperbd03d493ccc6\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperbd03d493ccc6\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
