<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera2f1d1d42b88\Symfony\Component\Mime\Tests\Part;

use _PhpScopera2f1d1d42b88\PHPUnit\Framework\TestCase;
use _PhpScopera2f1d1d42b88\Symfony\Component\Mime\Header\Headers;
use _PhpScopera2f1d1d42b88\Symfony\Component\Mime\Header\ParameterizedHeader;
use _PhpScopera2f1d1d42b88\Symfony\Component\Mime\Header\UnstructuredHeader;
use _PhpScopera2f1d1d42b88\Symfony\Component\Mime\Part\TextPart;
class TextPartTest extends \_PhpScopera2f1d1d42b88\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $p = new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Part\TextPart('content');
        $this->assertEquals('content', $p->getBody());
        $this->assertEquals('content', $p->bodyToString());
        $this->assertEquals('content', \implode('', \iterator_to_array($p->bodyToIterable())));
        // bodyToIterable() can be called several times
        $this->assertEquals('content', \implode('', \iterator_to_array($p->bodyToIterable())));
        $this->assertEquals('text', $p->getMediaType());
        $this->assertEquals('plain', $p->getMediaSubType());
        $p = new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Part\TextPart('content', null, 'html');
        $this->assertEquals('html', $p->getMediaSubType());
    }
    public function testConstructorWithResource()
    {
        $f = \fopen('php://memory', 'r+', \false);
        \fwrite($f, 'content');
        \rewind($f);
        $p = new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Part\TextPart($f);
        $this->assertEquals('content', $p->getBody());
        $this->assertEquals('content', $p->bodyToString());
        $this->assertEquals('content', \implode('', \iterator_to_array($p->bodyToIterable())));
        \fclose($f);
    }
    public function testConstructorWithNonStringOrResource()
    {
        $this->expectException(\TypeError::class);
        new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Part\TextPart(new \stdClass());
    }
    public function testHeaders()
    {
        $p = new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Part\TextPart('content');
        $this->assertEquals(new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Header\Headers(new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Header\ParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'utf-8']), new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Header\UnstructuredHeader('Content-Transfer-Encoding', 'quoted-printable')), $p->getPreparedHeaders());
        $p = new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Part\TextPart('content', 'iso-8859-1');
        $this->assertEquals(new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Header\Headers(new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Header\ParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'iso-8859-1']), new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Header\UnstructuredHeader('Content-Transfer-Encoding', 'quoted-printable')), $p->getPreparedHeaders());
    }
    public function testEncoding()
    {
        $p = new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Part\TextPart('content', 'utf-8', 'plain', 'base64');
        $this->assertEquals(\base64_encode('content'), $p->bodyToString());
        $this->assertEquals(\base64_encode('content'), \implode('', \iterator_to_array($p->bodyToIterable())));
        $this->assertEquals(new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Header\Headers(new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Header\ParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'utf-8']), new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Header\UnstructuredHeader('Content-Transfer-Encoding', 'base64')), $p->getPreparedHeaders());
    }
    public function testSerialize()
    {
        $r = \fopen('php://memory', 'r+', \false);
        \fwrite($r, 'Text content');
        \rewind($r);
        $p = new \_PhpScopera2f1d1d42b88\Symfony\Component\Mime\Part\TextPart($r);
        $p->getHeaders()->addTextHeader('foo', 'bar');
        $expected = clone $p;
        $this->assertEquals($expected->toString(), \unserialize(\serialize($p))->toString());
    }
}
