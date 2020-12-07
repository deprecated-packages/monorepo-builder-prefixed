<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperab93339c6bca\Symfony\Component\Mime\Tests;

use _PhpScoperab93339c6bca\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperab93339c6bca\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperab93339c6bca\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperab93339c6bca\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperab93339c6bca\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
