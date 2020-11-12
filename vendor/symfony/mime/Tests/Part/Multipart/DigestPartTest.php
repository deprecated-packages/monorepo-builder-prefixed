<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperad3f32c1b87c\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperad3f32c1b87c\PHPUnit\Framework\TestCase;
use _PhpScoperad3f32c1b87c\Symfony\Component\Mime\Message;
use _PhpScoperad3f32c1b87c\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperad3f32c1b87c\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperad3f32c1b87c\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperad3f32c1b87c\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperad3f32c1b87c\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperad3f32c1b87c\Symfony\Component\Mime\Message()), $b = new \_PhpScoperad3f32c1b87c\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperad3f32c1b87c\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
