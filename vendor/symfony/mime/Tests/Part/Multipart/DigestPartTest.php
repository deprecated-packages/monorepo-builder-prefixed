<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperfdd2db5e123d\PHPUnit\Framework\TestCase;
use _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message;
use _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperfdd2db5e123d\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperfdd2db5e123d\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message()), $b = new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperfdd2db5e123d\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
