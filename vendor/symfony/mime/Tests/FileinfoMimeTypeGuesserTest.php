<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbecbc4cd500f\Symfony\Component\Mime\Tests;

use _PhpScoperbecbc4cd500f\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperbecbc4cd500f\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperbecbc4cd500f\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperbecbc4cd500f\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperbecbc4cd500f\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
