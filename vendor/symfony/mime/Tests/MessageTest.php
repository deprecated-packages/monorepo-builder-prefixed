<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercd5c1af09a49\Symfony\Component\Mime\Tests;

use _PhpScopercd5c1af09a49\PHPUnit\Framework\TestCase;
use _PhpScopercd5c1af09a49\Symfony\Component\Mime\Address;
use _PhpScopercd5c1af09a49\Symfony\Component\Mime\Header\Headers;
use _PhpScopercd5c1af09a49\Symfony\Component\Mime\Header\MailboxListHeader;
use _PhpScopercd5c1af09a49\Symfony\Component\Mime\Header\UnstructuredHeader;
use _PhpScopercd5c1af09a49\Symfony\Component\Mime\Message;
use _PhpScopercd5c1af09a49\Symfony\Component\Mime\NamedAddress;
use _PhpScopercd5c1af09a49\Symfony\Component\Mime\Part\TextPart;
class MessageTest extends \_PhpScopercd5c1af09a49\PHPUnit\Framework\TestCase
{
    public function testConstruct()
    {
        $m = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message();
        $this->assertNull($m->getBody());
        $this->assertEquals(new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Header\Headers(), $m->getHeaders());
        $m = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message($h = (new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Header\Headers())->addDateHeader('Date', new \DateTime()), $b = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Part\TextPart('content'));
        $this->assertSame($b, $m->getBody());
        $this->assertEquals($h, $m->getHeaders());
        $m = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message();
        $m->setBody($b);
        $m->setHeaders($h);
        $this->assertSame($b, $m->getBody());
        $this->assertSame($h, $m->getHeaders());
    }
    public function testGetPreparedHeadersThrowsWhenNoFrom()
    {
        $this->expectException(\LogicException::class);
        (new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message())->getPreparedHeaders();
    }
    public function testGetPreparedHeadersCloneHeaders()
    {
        $message = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $this->assertNotSame($message->getPreparedHeaders(), $message->getHeaders());
    }
    public function testGetPreparedHeadersSetRequiredHeaders()
    {
        $message = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $headers = $message->getPreparedHeaders();
        $this->assertTrue($headers->has('MIME-Version'));
        $this->assertTrue($headers->has('Message-ID'));
        $this->assertTrue($headers->has('Date'));
        $this->assertFalse($headers->has('Bcc'));
    }
    public function testGetPreparedHeaders()
    {
        $message = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $h = $message->getPreparedHeaders();
        $this->assertCount(4, \iterator_to_array($h->getAll()));
        $this->assertEquals(new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Address('fabien@symfony.com')]), $h->get('From'));
        $this->assertEquals(new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Header\UnstructuredHeader('MIME-Version', '1.0'), $h->get('mime-version'));
        $this->assertTrue($h->has('Message-Id'));
        $this->assertTrue($h->has('Date'));
        $message = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $message->getHeaders()->addDateHeader('Date', $n = new \DateTimeImmutable());
        $this->assertEquals($n, $message->getPreparedHeaders()->get('Date')->getDateTime());
        $message = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $message->getHeaders()->addMailboxListHeader('Bcc', ['fabien@symfony.com']);
        $this->assertNull($message->getPreparedHeaders()->get('Bcc'));
    }
    public function testGetPreparedHeadersWithNoFrom()
    {
        $this->expectException(\LogicException::class);
        (new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message())->getPreparedHeaders();
    }
    public function testGetPreparedHeadersWithNamedFrom()
    {
        $message = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', [new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\NamedAddress('fabien@symfony.com', 'Fabien')]);
        $h = $message->getPreparedHeaders();
        $this->assertEquals(new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\NamedAddress('fabien@symfony.com', 'Fabien')]), $h->get('From'));
        $this->assertTrue($h->has('Message-Id'));
    }
    public function testGetPreparedHeadersHasSenderWhenNeeded()
    {
        $message = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $this->assertNull($message->getPreparedHeaders()->get('Sender'));
        $message = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com', 'lucas@symfony.com']);
        $this->assertEquals('fabien@symfony.com', $message->getPreparedHeaders()->get('Sender')->getAddress()->getAddress());
        $message = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com', 'lucas@symfony.com']);
        $message->getHeaders()->addMailboxHeader('Sender', 'thomas@symfony.com');
        $this->assertEquals('thomas@symfony.com', $message->getPreparedHeaders()->get('Sender')->getAddress()->getAddress());
    }
    public function testToString()
    {
        $message = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $expected = <<<EOF
From: fabien@symfony.com
MIME-Version: 1.0
Date: %s
Message-ID: <%s@symfony.com>
Content-Type: text/plain; charset=utf-8
Content-Transfer-Encoding: quoted-printable


EOF;
        $this->assertStringMatchesFormat($expected, \str_replace("\r\n", "\n", $message->toString()));
        $this->assertStringMatchesFormat($expected, \str_replace("\r\n", "\n", \implode('', \iterator_to_array($message->toIterable(), \false))));
        $message = new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Message(null, new \_PhpScopercd5c1af09a49\Symfony\Component\Mime\Part\TextPart('content'));
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $expected = <<<EOF
From: fabien@symfony.com
MIME-Version: 1.0
Date: %s
Message-ID: <%s@symfony.com>
Content-Type: text/plain; charset=utf-8
Content-Transfer-Encoding: quoted-printable

content
EOF;
        $this->assertStringMatchesFormat($expected, \str_replace("\r\n", "\n", $message->toString()));
        $this->assertStringMatchesFormat($expected, \str_replace("\r\n", "\n", \implode('', \iterator_to_array($message->toIterable(), \false))));
    }
}
