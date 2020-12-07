<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopereb7fcd8f999a\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScopereb7fcd8f999a\PHPUnit\Framework\TestCase;
use _PhpScopereb7fcd8f999a\Symfony\Component\Mime\Message;
use _PhpScopereb7fcd8f999a\Symfony\Component\Mime\Part\MessagePart;
use _PhpScopereb7fcd8f999a\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScopereb7fcd8f999a\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScopereb7fcd8f999a\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScopereb7fcd8f999a\Symfony\Component\Mime\Part\MessagePart(new \_PhpScopereb7fcd8f999a\Symfony\Component\Mime\Message()), $b = new \_PhpScopereb7fcd8f999a\Symfony\Component\Mime\Part\MessagePart(new \_PhpScopereb7fcd8f999a\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
