<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Tests;

use _PhpScoperfdd2db5e123d\PHPUnit\Framework\TestCase;
use _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Address;
use _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Header\Headers;
use _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Header\MailboxListHeader;
use _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Header\UnstructuredHeader;
use _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message;
use _PhpScoperfdd2db5e123d\Symfony\Component\Mime\NamedAddress;
use _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Part\TextPart;
class MessageTest extends \_PhpScoperfdd2db5e123d\PHPUnit\Framework\TestCase
{
    public function testConstruct()
    {
        $m = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message();
        $this->assertNull($m->getBody());
        $this->assertEquals(new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Header\Headers(), $m->getHeaders());
        $m = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message($h = (new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Header\Headers())->addDateHeader('Date', new \DateTime()), $b = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Part\TextPart('content'));
        $this->assertSame($b, $m->getBody());
        $this->assertEquals($h, $m->getHeaders());
        $m = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message();
        $m->setBody($b);
        $m->setHeaders($h);
        $this->assertSame($b, $m->getBody());
        $this->assertSame($h, $m->getHeaders());
    }
    public function testGetPreparedHeadersThrowsWhenNoFrom()
    {
        $this->expectException(\LogicException::class);
        (new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message())->getPreparedHeaders();
    }
    public function testGetPreparedHeadersCloneHeaders()
    {
        $message = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $this->assertNotSame($message->getPreparedHeaders(), $message->getHeaders());
    }
    public function testGetPreparedHeadersSetRequiredHeaders()
    {
        $message = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $headers = $message->getPreparedHeaders();
        $this->assertTrue($headers->has('MIME-Version'));
        $this->assertTrue($headers->has('Message-ID'));
        $this->assertTrue($headers->has('Date'));
        $this->assertFalse($headers->has('Bcc'));
    }
    public function testGetPreparedHeaders()
    {
        $message = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $h = $message->getPreparedHeaders();
        $this->assertCount(4, \iterator_to_array($h->getAll()));
        $this->assertEquals(new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Address('fabien@symfony.com')]), $h->get('From'));
        $this->assertEquals(new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Header\UnstructuredHeader('MIME-Version', '1.0'), $h->get('mime-version'));
        $this->assertTrue($h->has('Message-Id'));
        $this->assertTrue($h->has('Date'));
        $message = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $message->getHeaders()->addDateHeader('Date', $n = new \DateTimeImmutable());
        $this->assertEquals($n, $message->getPreparedHeaders()->get('Date')->getDateTime());
        $message = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $message->getHeaders()->addMailboxListHeader('Bcc', ['fabien@symfony.com']);
        $this->assertNull($message->getPreparedHeaders()->get('Bcc'));
    }
    public function testGetPreparedHeadersWithNoFrom()
    {
        $this->expectException(\LogicException::class);
        (new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message())->getPreparedHeaders();
    }
    public function testGetPreparedHeadersWithNamedFrom()
    {
        $message = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', [new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\NamedAddress('fabien@symfony.com', 'Fabien')]);
        $h = $message->getPreparedHeaders();
        $this->assertEquals(new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Header\MailboxListHeader('From', [new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\NamedAddress('fabien@symfony.com', 'Fabien')]), $h->get('From'));
        $this->assertTrue($h->has('Message-Id'));
    }
    public function testGetPreparedHeadersHasSenderWhenNeeded()
    {
        $message = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com']);
        $this->assertNull($message->getPreparedHeaders()->get('Sender'));
        $message = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com', 'lucas@symfony.com']);
        $this->assertEquals('fabien@symfony.com', $message->getPreparedHeaders()->get('Sender')->getAddress()->getAddress());
        $message = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message();
        $message->getHeaders()->addMailboxListHeader('From', ['fabien@symfony.com', 'lucas@symfony.com']);
        $message->getHeaders()->addMailboxHeader('Sender', 'thomas@symfony.com');
        $this->assertEquals('thomas@symfony.com', $message->getPreparedHeaders()->get('Sender')->getAddress()->getAddress());
    }
    public function testToString()
    {
        $message = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message();
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
        $message = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message(null, new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Part\TextPart('content'));
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
