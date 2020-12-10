<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfa7966ff486f\Symfony\Component\Mime\Tests;

use _PhpScoperfa7966ff486f\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperfa7966ff486f\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperfa7966ff486f\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperfa7966ff486f\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperfa7966ff486f\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
