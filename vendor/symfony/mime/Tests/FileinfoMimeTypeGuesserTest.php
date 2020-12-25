<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperff72c38d4e2a\Symfony\Component\Mime\Tests;

use _PhpScoperff72c38d4e2a\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperff72c38d4e2a\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperff72c38d4e2a\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperff72c38d4e2a\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperff72c38d4e2a\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
