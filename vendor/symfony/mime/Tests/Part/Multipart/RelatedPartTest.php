<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdf352df6d893\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperdf352df6d893\PHPUnit\Framework\TestCase;
use _PhpScoperdf352df6d893\Symfony\Component\Mime\Part\Multipart\RelatedPart;
use _PhpScoperdf352df6d893\Symfony\Component\Mime\Part\TextPart;
class RelatedPartTest extends \_PhpScoperdf352df6d893\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperdf352df6d893\Symfony\Component\Mime\Part\Multipart\RelatedPart($a = new \_PhpScoperdf352df6d893\Symfony\Component\Mime\Part\TextPart('content'), $b = new \_PhpScoperdf352df6d893\Symfony\Component\Mime\Part\TextPart('HTML content', 'utf-8', 'html'), $c = new \_PhpScoperdf352df6d893\Symfony\Component\Mime\Part\TextPart('HTML content again', 'utf-8', 'html'));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('related', $r->getMediaSubtype());
        $this->assertEquals([$a, $b, $c], $r->getParts());
        $this->assertFalse($a->getHeaders()->has('Content-ID'));
        $this->assertTrue($b->getHeaders()->has('Content-ID'));
        $this->assertTrue($c->getHeaders()->has('Content-ID'));
    }
}
