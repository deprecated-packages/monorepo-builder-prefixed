<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere0f28e6b9bde\Symfony\Component\Mime\Tests;

use _PhpScopere0f28e6b9bde\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScopere0f28e6b9bde\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScopere0f28e6b9bde\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScopere0f28e6b9bde\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScopere0f28e6b9bde\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
