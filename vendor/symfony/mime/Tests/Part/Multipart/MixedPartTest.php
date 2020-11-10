<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper31b05558ad5c\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoper31b05558ad5c\PHPUnit\Framework\TestCase;
use _PhpScoper31b05558ad5c\Symfony\Component\Mime\Part\Multipart\MixedPart;
class MixedPartTest extends \_PhpScoper31b05558ad5c\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScoper31b05558ad5c\Symfony\Component\Mime\Part\Multipart\MixedPart();
        $this->assertEquals('multipart', $a->getMediaType());
        $this->assertEquals('mixed', $a->getMediaSubtype());
    }
}
