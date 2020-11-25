<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper44b9ade4c89e\Symfony\Component\Mime\Tests;

use _PhpScoper44b9ade4c89e\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoper44b9ade4c89e\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoper44b9ade4c89e\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoper44b9ade4c89e\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoper44b9ade4c89e\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
