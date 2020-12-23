<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere6d124d1f7ba\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScopere6d124d1f7ba\PHPUnit\Framework\TestCase;
use _PhpScopere6d124d1f7ba\Symfony\Component\Mime\Part\Multipart\RelatedPart;
use _PhpScopere6d124d1f7ba\Symfony\Component\Mime\Part\TextPart;
class RelatedPartTest extends \_PhpScopere6d124d1f7ba\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScopere6d124d1f7ba\Symfony\Component\Mime\Part\Multipart\RelatedPart($a = new \_PhpScopere6d124d1f7ba\Symfony\Component\Mime\Part\TextPart('content'), $b = new \_PhpScopere6d124d1f7ba\Symfony\Component\Mime\Part\TextPart('HTML content', 'utf-8', 'html'), $c = new \_PhpScopere6d124d1f7ba\Symfony\Component\Mime\Part\TextPart('HTML content again', 'utf-8', 'html'));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('related', $r->getMediaSubtype());
        $this->assertEquals([$a, $b, $c], $r->getParts());
        $this->assertFalse($a->getHeaders()->has('Content-ID'));
        $this->assertTrue($b->getHeaders()->has('Content-ID'));
        $this->assertTrue($c->getHeaders()->has('Content-ID'));
    }
}
