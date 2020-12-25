<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf0aae7819675\Symfony\Component\Mime\Tests;

use _PhpScoperf0aae7819675\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperf0aae7819675\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperf0aae7819675\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperf0aae7819675\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperf0aae7819675\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
