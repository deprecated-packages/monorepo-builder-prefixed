<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaf523e5605cc\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperaf523e5605cc\PHPUnit\Framework\TestCase;
use _PhpScoperaf523e5605cc\Symfony\Component\Mime\Message;
use _PhpScoperaf523e5605cc\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperaf523e5605cc\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperaf523e5605cc\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperaf523e5605cc\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperaf523e5605cc\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperaf523e5605cc\Symfony\Component\Mime\Message()), $b = new \_PhpScoperaf523e5605cc\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperaf523e5605cc\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
