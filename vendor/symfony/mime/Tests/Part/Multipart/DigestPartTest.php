<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopereaa086e6f852\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScopereaa086e6f852\PHPUnit\Framework\TestCase;
use _PhpScopereaa086e6f852\Symfony\Component\Mime\Message;
use _PhpScopereaa086e6f852\Symfony\Component\Mime\Part\MessagePart;
use _PhpScopereaa086e6f852\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScopereaa086e6f852\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScopereaa086e6f852\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScopereaa086e6f852\Symfony\Component\Mime\Part\MessagePart(new \_PhpScopereaa086e6f852\Symfony\Component\Mime\Message()), $b = new \_PhpScopereaa086e6f852\Symfony\Component\Mime\Part\MessagePart(new \_PhpScopereaa086e6f852\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
