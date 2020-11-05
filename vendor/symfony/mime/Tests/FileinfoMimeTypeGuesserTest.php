<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf78d2b40800e\Symfony\Component\Mime\Tests;

use _PhpScoperf78d2b40800e\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperf78d2b40800e\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperf78d2b40800e\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperf78d2b40800e\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperf78d2b40800e\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
