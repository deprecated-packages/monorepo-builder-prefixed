<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper323d4c178bee\Symfony\Component\Mime\Tests;

use _PhpScoper323d4c178bee\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoper323d4c178bee\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoper323d4c178bee\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoper323d4c178bee\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoper323d4c178bee\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
