<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper6b92aa0ec16f\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoper6b92aa0ec16f\PHPUnit\Framework\TestCase;
use _PhpScoper6b92aa0ec16f\Symfony\Component\Mime\Part\Multipart\MixedPart;
class MixedPartTest extends \_PhpScoper6b92aa0ec16f\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScoper6b92aa0ec16f\Symfony\Component\Mime\Part\Multipart\MixedPart();
        $this->assertEquals('multipart', $a->getMediaType());
        $this->assertEquals('mixed', $a->getMediaSubtype());
    }
}
