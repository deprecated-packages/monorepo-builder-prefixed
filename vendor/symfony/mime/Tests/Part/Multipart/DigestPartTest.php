<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper29aa9f1ba53d\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoper29aa9f1ba53d\PHPUnit\Framework\TestCase;
use _PhpScoper29aa9f1ba53d\Symfony\Component\Mime\Message;
use _PhpScoper29aa9f1ba53d\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoper29aa9f1ba53d\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoper29aa9f1ba53d\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoper29aa9f1ba53d\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoper29aa9f1ba53d\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoper29aa9f1ba53d\Symfony\Component\Mime\Message()), $b = new \_PhpScoper29aa9f1ba53d\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoper29aa9f1ba53d\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
