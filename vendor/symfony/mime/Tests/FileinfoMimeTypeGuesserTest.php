<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb2724c6b069f\Symfony\Component\Mime\Tests;

use _PhpScoperb2724c6b069f\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperb2724c6b069f\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperb2724c6b069f\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperb2724c6b069f\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperb2724c6b069f\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
