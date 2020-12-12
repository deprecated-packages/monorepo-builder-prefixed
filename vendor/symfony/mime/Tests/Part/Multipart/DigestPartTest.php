<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf40000691b7b\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperf40000691b7b\PHPUnit\Framework\TestCase;
use _PhpScoperf40000691b7b\Symfony\Component\Mime\Message;
use _PhpScoperf40000691b7b\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperf40000691b7b\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperf40000691b7b\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperf40000691b7b\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperf40000691b7b\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperf40000691b7b\Symfony\Component\Mime\Message()), $b = new \_PhpScoperf40000691b7b\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperf40000691b7b\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
