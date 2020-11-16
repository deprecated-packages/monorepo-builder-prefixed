<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdfa889d8967a\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperdfa889d8967a\PHPUnit\Framework\TestCase;
use _PhpScoperdfa889d8967a\Symfony\Component\Mime\Message;
use _PhpScoperdfa889d8967a\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperdfa889d8967a\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperdfa889d8967a\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperdfa889d8967a\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperdfa889d8967a\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperdfa889d8967a\Symfony\Component\Mime\Message()), $b = new \_PhpScoperdfa889d8967a\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperdfa889d8967a\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
