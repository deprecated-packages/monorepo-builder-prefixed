<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc35444adb584\Symfony\Component\Mime\Tests;

use _PhpScoperc35444adb584\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperc35444adb584\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperc35444adb584\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperc35444adb584\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperc35444adb584\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
