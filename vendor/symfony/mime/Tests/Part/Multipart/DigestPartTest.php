<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperff72c38d4e2a\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperff72c38d4e2a\PHPUnit\Framework\TestCase;
use _PhpScoperff72c38d4e2a\Symfony\Component\Mime\Message;
use _PhpScoperff72c38d4e2a\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperff72c38d4e2a\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperff72c38d4e2a\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperff72c38d4e2a\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperff72c38d4e2a\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperff72c38d4e2a\Symfony\Component\Mime\Message()), $b = new \_PhpScoperff72c38d4e2a\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperff72c38d4e2a\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
