<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper76c4aa553101\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoper76c4aa553101\PHPUnit\Framework\TestCase;
use _PhpScoper76c4aa553101\Symfony\Component\Mime\Message;
use _PhpScoper76c4aa553101\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoper76c4aa553101\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoper76c4aa553101\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoper76c4aa553101\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoper76c4aa553101\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoper76c4aa553101\Symfony\Component\Mime\Message()), $b = new \_PhpScoper76c4aa553101\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoper76c4aa553101\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
