<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperbe77f3b0e77d\PHPUnit\Framework\TestCase;
use _PhpScoperbe77f3b0e77d\Symfony\Component\Mime\Message;
use _PhpScoperbe77f3b0e77d\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperbe77f3b0e77d\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperbe77f3b0e77d\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperbe77f3b0e77d\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperbe77f3b0e77d\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperbe77f3b0e77d\Symfony\Component\Mime\Message()), $b = new \_PhpScoperbe77f3b0e77d\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperbe77f3b0e77d\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
