<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5665d3e54f4c\Symfony\Component\Mime\Tests\Header;

use _PhpScoper5665d3e54f4c\PHPUnit\Framework\TestCase;
use _PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader;
class IdentificationHeaderTest extends \_PhpScoper5665d3e54f4c\PHPUnit\Framework\TestCase
{
    public function testValueMatchesMsgIdSpec()
    {
        /* -- RFC 2822, 3.6.4.
                 message-id      =       "Message-ID:" msg-id CRLF
        
                 in-reply-to     =       "In-Reply-To:" 1*msg-id CRLF
        
                 references      =       "References:" 1*msg-id CRLF
        
                 msg-id          =       [CFWS] "<" id-left "@" id-right ">" [CFWS]
        
                 id-left         =       dot-atom-text / no-fold-quote / obs-id-left
        
                 id-right        =       dot-atom-text / no-fold-literal / obs-id-right
        
                 no-fold-quote   =       DQUOTE *(qtext / quoted-pair) DQUOTE
        
                 no-fold-literal =       "[" *(dtext / quoted-pair) "]"
                */
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('Message-ID', 'id-left@id-right');
        $this->assertEquals('<id-left@id-right>', $header->getBodyAsString());
    }
    public function testIdCanBeRetrievedVerbatim()
    {
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('Message-ID', 'id-left@id-right');
        $this->assertEquals('id-left@id-right', $header->getId());
    }
    public function testMultipleIdsCanBeSet()
    {
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('References', 'c@d');
        $header->setIds(['a@b', 'x@y']);
        $this->assertEquals(['a@b', 'x@y'], $header->getIds());
    }
    public function testSettingMultipleIdsProducesAListValue()
    {
        /* -- RFC 2822, 3.6.4.
                The "References:" and "In-Reply-To:" field each contain one or more
                unique message identifiers, optionally separated by CFWS.
        
                 .. SNIP ..
        
                 in-reply-to     =       "In-Reply-To:" 1*msg-id CRLF
        
                 references      =       "References:" 1*msg-id CRLF
                 */
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('References', ['a@b', 'x@y']);
        $this->assertEquals('<a@b> <x@y>', $header->getBodyAsString());
    }
    public function testIdLeftCanBeQuoted()
    {
        /* -- RFC 2822, 3.6.4.
           id-left         =       dot-atom-text / no-fold-quote / obs-id-left
           */
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('References', '"ab"@c');
        $this->assertEquals('"ab"@c', $header->getId());
        $this->assertEquals('<"ab"@c>', $header->getBodyAsString());
    }
    public function testIdLeftCanContainAnglesAsQuotedPairs()
    {
        /* -- RFC 2822, 3.6.4.
           no-fold-quote   =       DQUOTE *(qtext / quoted-pair) DQUOTE
           */
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('References', '"a\\<\\>b"@c');
        $this->assertEquals('"a\\<\\>b"@c', $header->getId());
        $this->assertEquals('<"a\\<\\>b"@c>', $header->getBodyAsString());
    }
    public function testIdLeftCanBeDotAtom()
    {
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('References', 'a.b+&%$.c@d');
        $this->assertEquals('a.b+&%$.c@d', $header->getId());
        $this->assertEquals('<a.b+&%$.c@d>', $header->getBodyAsString());
    }
    /**
     * @expectedException \Exception
     * @expectedMessageException "a b c" is not valid id-left
     */
    public function testInvalidIdLeftThrowsException()
    {
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('References', 'a b c@d');
    }
    public function testIdRightCanBeDotAtom()
    {
        /* -- RFC 2822, 3.6.4.
           id-right        =       dot-atom-text / no-fold-literal / obs-id-right
           */
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('References', 'a@b.c+&%$.d');
        $this->assertEquals('a@b.c+&%$.d', $header->getId());
        $this->assertEquals('<a@b.c+&%$.d>', $header->getBodyAsString());
    }
    public function testIdRightCanBeLiteral()
    {
        /* -- RFC 2822, 3.6.4.
            no-fold-literal =       "[" *(dtext / quoted-pair) "]"
           */
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('References', 'a@[1.2.3.4]');
        $this->assertEquals('a@[1.2.3.4]', $header->getId());
        $this->assertEquals('<a@[1.2.3.4]>', $header->getBodyAsString());
    }
    public function testIdRigthIsIdnEncoded()
    {
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('References', 'a@ä');
        $this->assertEquals('a@ä', $header->getId());
        $this->assertEquals('<a@xn--4ca>', $header->getBodyAsString());
    }
    /**
     * @expectedException \Exception
     * @expectedMessageException "b c d" is not valid id-right
     */
    public function testInvalidIdRightThrowsException()
    {
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('References', 'a@b c d');
    }
    /**
     * @expectedException \Exception
     * @expectedMessageException "abc" is does not contain @
     */
    public function testMissingAtSignThrowsException()
    {
        /* -- RFC 2822, 3.6.4.
           msg-id          =       [CFWS] "<" id-left "@" id-right ">" [CFWS]
           */
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('References', 'abc');
    }
    public function testSetBody()
    {
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('Message-ID', 'c@d');
        $header->setBody('a@b');
        $this->assertEquals(['a@b'], $header->getIds());
    }
    public function testGetBody()
    {
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('Message-ID', 'a@b');
        $this->assertEquals(['a@b'], $header->getBody());
    }
    public function testStringValue()
    {
        $header = new \_PhpScoper5665d3e54f4c\Symfony\Component\Mime\Header\IdentificationHeader('References', ['a@b', 'x@y']);
        $this->assertEquals('References: <a@b> <x@y>', $header->toString());
    }
}
